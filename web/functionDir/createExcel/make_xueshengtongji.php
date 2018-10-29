<?php
require_once  'PHPExcel.php'; //用于phpExcel
require_once  'PHPExcel/Writer/Excel2007.php'; //用于输出excel文档
require_once  'PHPExcel/RichText.php';
require_once  'PHPExcel/Worksheet.php';
require_once  'System.php';

ini_set('date.timezone','Asia/Shanghai');
error_log("in come");
$year = $_GET['year'];
$department = $_GET['department'];
$truename = $_GET['truename'];
$jsonData = makeData($year,$department,$truename);//获取需要生成excel的数据

//$rand = microtime();//定义文件名
$rand = time();
$filePath = "saveExcel/$rand.xls";//存放目录+文件

$tabelJsonHeader = json_encode(array("科室名称","工号","职称","姓名","是否合格","备注"));
$colDataType = array(
    "Id"=>PHPExcel_Cell_DataType::TYPE_STRING,//设置某个单元格格式
);
$url = createEXCEL($filePath,$jsonData,$tabelJsonHeader,$colDataType);//在PHPExcel.php中配置PHPExcel文件包含路径
//echo $url;//此url如果为空说明失败，成功，则直接跳转此路径即可
if(file_exists($filePath)){

    $file = fopen($filePath,"r");
    Header("Content-type: application/octet-stream");
    Header("Accept-Ranges: bytes");
    Header("Accept-Length: ".filesize($filePath));
    //Header("Content-Disposition: attachment; filename=" . "$rand.xls");
    Header("Content-Disposition: attachment; filename=" . $rand.".xls");
    echo fread($file,filesize($filePath));
    fclose($file);

    exit;
}

function makeData($year,$department,$truename){

    if(is_null($year)||$year==''){
        $year=intval (date("Y"));
    }
    $beginTime = date($year."-01-01 00:00:00");
    $endTime = date($year."-12-31 23:59:59");
    $condition="";
    $condition1="";
    if(!is_null($department)&&$department!=''){
        $condition = $condition." and uk.company = ".$department;
    }
    if(!is_null($truename)&&$truename!=''){
        //$condition = " and uk.truename = '".$truename."'";
        $condition = $condition." and uk.truename like '%".$truename."%'";
    }
    if(!is_null($year)&&$year!=''){
        //$condition = " and uk.truename = '".$truename."'";
        $condition1 = $condition1." and us.year = ".$year;
    }
    $con = System::getConnection();

    $sql = "select u1.id id,u1.nickname nickname,u2.title title,ifnull(u2.score,0) score,u2.createTime createTime,u1.job job,u1.idcard idcard,u1.department department,u1.truename truename ".
        "from ( ".
        " select u.id id,uk.truename truename,u.nickname nickname,uk.job job,uk.idcard idcard,uk.company department from user u left outer join user_profile uk on u.id = uk.id ".
        " where 1 = 1".$condition.
        ") u1 ".
        " left join ( ".
        " select c.title title,us.userId userId,us.score score,us.createTime createTime from user_score us left outer join course c on us.courseId = c.id ".
        " where 1=1".$condition1.
        ") u2 on u1.id = u2.userId ;";
    $result = System::getManyResult($con,$sql);
    $arryw = array();
    $keys = array(); //userId集合
    for($i=0;$i<count($result);$i++){
        $row = $result[$i];
        $key = $row['id'];
        if(!array_key_exists($key,$arryw)){
            $arry1 = array(); //0 id;1 用户名;2 总学分；3 职称；4 是否合格13分
            array_push($keys,$key);
            array_push($arry1,$row['id']);
            array_push($arry1,$row['nickname']);
            array_push($arry1,$row['score']);
            array_push($arry1,$row['job']);
            array_push($arry1,$row['idcard']);
            array_push($arry1,$row['department']);
            if($row['score']>=13){
                array_push($arry1,true);
            }else{
                array_push($arry1,false);
            }
            $arryw[$key] = $arry1;
            $arryw[$key][7] = $row['truename'];
        }else{
            $arryw[$key][2] = $arryw[$key][2] + $row['score'];
            if($arryw[$key][2]>=13){
                $arryw[$key][6] = true;
            }else{
                $arryw[$key][6] = false;
            }
        }
    }
    $sql = "select id,title from classroom";
    $result2 = System::getManyResult($con,$sql);
    $departments = array();
    foreach ($result2 as $item) {
        $departments[$item['id']] = $item['title'];
    }
    $arry = array();
    foreach ($arryw as $item){
        $ar = array();
        if(is_null($item[5])){
            continue;
        }
        //error_log($item[0]." ".$item[1]." ".$item[2]." ".$item[3]." ".$item[4]." ".$item[5]." ");
        if($item[4]==null||$item[5]==null){
            continue;
        }
        $ar[0] = $departments[$item[5]];
        $ar[1] = $item[1];
        $ar[2] = $item[3];
        //$age = System::getAgeByIDcard($item[4]);
        //$ar[3] = $age;
        $ar[3] = $item[7];
        $sql1 = "select DISTINCT(cll.courseId) courseId from course_lesson_learn cll ".
            "left join course c on c.id = cll.courseId  ".
            "where cll.userId = ".$item[0]."  and c.buyable = 1 ".
            "and cll.finshTime>='".$beginTime."' and cll.finshTime <= '".$endTime."';";
        $rresult1 = System::getManyResult($con,$sql1);
        $sql2 = "select DISTINCT(us.courseId) courseId  from user_score us ".
            "where us.userId = ".$item[0]." ".
            "and us.year = '".$year."';";
        $rresult2 = System::getManyResult($con,$sql2);
        $arr1 = array();
        foreach ($rresult2 as $r2){
            array_push($arr1,$r2['courseId']);
        }
        $tag = true;
        $remark1 = "";
        foreach ($rresult1 as $r1){
            if(!in_array($r1['courseId'],$arr1)){
                $tag = false;
                $remark1 = "有必修课未合格";
                break;
            }
        }
        $remark2 = "";
        $score = $item[2];
        if($score<13){
            $remark2 = "总学分小于13分";
        }
        if($score>=13&&$tag){
            $ar[4] = "合格";
        }else{
            $ar[4] = "不合格";
        }
        $ar[5] = $remark2.",".$remark1;
        error_log($ar[5]);
        array_push($arry,$ar);
    }

    System::closeConnection($con);

    return json_encode($arry);

}

//获取数据
function getData($mdb){
    $sql = "select * from `course` limit 0,10";
    $query = mysqli_query($mdb,$sql);
    $row = array();
    while($rs = mysqli_fetch_array($query)){
        array_push($row,$rs);
    }
    error_log($row[0]['title']);
    return json_encode($row);
}
//生成excel
function createEXCEL($filePath,$jsonData,$tableJsonHeader,$colDataType=null){
    $objPHPExcel = new PHPExcel();
    $sheet = $objPHPExcel->getSheet(0);
    $dataArr = json_decode($jsonData,true);
    if(empty($dataArr)){
        return "";
    }
    $tableHeaderArr = json_decode($tableJsonHeader,true);
    $c = count($dataArr);
    $l = count($tableHeaderArr);//数字索引和关联索引实际是表示一个值

    $AZ = setAZ(25);
    for($m=0;$m<$l;$m++){//表头
        $A = $AZ[$m]."1";
        $sheet ->setCellValue($A, $tableHeaderArr[$m]);
    }

    $t = 0;
    for($i=0;$i<$c;$i++){//行
        $span = ord("A");
        for($m=0;$m<$l;$m++){//列
            //$sheet ->setCellValue($AZ[$m].($i+2), $dataArr[$i][$tableHeaderArr[$m]]);//会将00002转换成2
            // error_log($AZ[$m]."       ".$m);
            //  $span = ord("A");

            $k = $i+2;
            $A = $AZ[$m].$k;
            $sheet ->setCellValue($A, $dataArr[$i][$m]);//默认格式
            $t = $t + 1;

        }

    }

    $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
    $objWriter->save($filePath);
    return $filePath;
}
//暂时使用此方法，没有找到更简便的生成A-Z..的方式
function setAZ($n=0){
    $AZ = array(
        0=>"A",
        1=>"B",
        2=>"C",
        3=>"D",
        4=>"E",
        5=>"F",
        6=>"G",
        7=>"H",
        8=>"I",
        9=>"J",
        10=>"K",
        11=>"L",
        12=>"M",
        13=>"N",
        14=>"O",
        15=>"P",
        16=>"Q",
        17=>"R",
        18=>"S",
        19=>"T",
        20=>"U",
        21=>"V",
        22=>"W",
        23=>"X",
        24=>"Y",
        25=>"Z"
    );
    $arr = array();
    $m = 0;
    $mm = 0;
    for($i=0;$i<$n;$i++){
        if(0<=$i && $i<26){
            $arr[$i] = $AZ[$i];////26个字母轮循1次
        }else if(26<=$i && $i<42){
            $arr[$i] = "A".$AZ[$m];//26个字母轮循2次
            $m++;
        }else if(42<=$i && $i<68){
            $arr[$i] = "B".$AZ[$mm];//26个字母轮循3次
            $mm++;
        }//下面依次类推
    }
    error_log(json_encode($arr));
    return $arr;
}

?>