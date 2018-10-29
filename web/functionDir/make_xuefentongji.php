<?php


require_once  'System.php';
require_once  __ROOT__.'PHPExcelWriter\PHPExcel.php'; //用于phpExcel
require_once  __ROOT__.'PHPExcelWriter\PHPExcel\Writer\Excel2007.php'; //用于输出excel文档
require_once  __ROOT__.'PHPExcelWriter\PHPExcel\RichText.php';
require_once  __ROOT__.'PHPExcelWriter\PHPExcel\Worksheet.php';



$year = $_POST['year'];
error_log($year);
$jsonData = makeData($year);//获取需要生成excel的数据

//$rand = microtime();//定义文件名
$rand = time();
$filePath = "saveExcel/$rand.xlsx";//存放目录+文件
/*
$tabelJsonHeader = json_encode(array(//定义excel文件头部
    0=>"id",//自增索引，用于根据此键获取对应的数据库值，数据库的键或者重命名的键（字段）
    1=>"title",
    2=>"status",
));
*/

$tabelJsonHeader = json_encode(array("科室名称","在岗人数","初级合格人数","中级合格人数","副高级合格人数","高级合格人数","30岁以下合格人数",
    "30-40岁合格人数","40-50岁合格人数","50岁以上合格人数","合计人数","合格率"));
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
    Header("Content-Disposition: attachment; filename=" . "$rand.xlsx");
    echo fread($file,filesize($filePath));
    fclose($file);
    exit;
}

function makeData($year){
    if(is_null($year)||$year==''){
        $year=intval (date("Y"));
    }
    error_log($year);
    $beginTime = date($year."-01-01 00:00:00");
    $endTime = date($year."-12-30 23:59:59");
    $con = getConnection();
    $sql = "select uk.id id,u.nickname nickname,c.title title,us.score score,us.createTime createTime,uk.job job,uk.idcard idcard,uk.company department,uk.varcharField2 varcharField2  from user u ".
        "left join user_profile uk on u.id = uk.id ".
        "left join user_score us on uk.id = us.userId ".
        "join course c on us.courseId = c.id ".
        "where us.createTime>='".$beginTime."' and us.createTime <= '".$endTime."';";
    $result = getManyResult($con,$sql);
    $arry = array();
    $keys = array(); //userId集合
    error_log(json_encode($result));
    for($i=0;$i<count($result);$i++){
        $row = $result[$i];
        $key = $row['id'];
        if(!array_key_exists($key,$arry)){
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
            $arry[$key] = $arry1;
        }else{
            $arry[$key][2] = $arry[$key][2] + $row['score'];
            if($arry[$key][2]>=13){
                $arry[$key][6] = true;
            }else{
                $arry[$key][6] = false;
            }
        }
    }
    $sql = "select id,title from classroom";
    $result2 = System::getManyResult($con,$sql);
    $keshi = array();
    foreach ($result2 as $r){
        $keshi[$r['id']] = $r['title'];
    }
    $arrayk = array();
    $kkeys = array();  //科室集合
    foreach($keys as $key){
        $keshi = $arry[$key][5];
        $zhicheng = $arry[$key][3];
        $ispass = $arry[$key][6];
        $array2 = array(); //0 科室；1在岗人数；2 初级合格人数；3 中级合格人数；4 副高级合格人数；5 高级合格人数；6 30岁一下合格人数；
        //7 30到40；8 40到50；9 50岁以上;10 合计
        if(!array_key_exists($keshi,$arrayk)){
            array_push($array2,$keshi);
            array_push($kkeys,$keshi);
            $sql1 = "select count(1) count from user_profile where company = '".$keshi."';";
            $result1 = getOneResult($con,$sql1);
            $count = $result1['count'];
            error_log($count);
            $array2[1] = $count;
            $array2[2] = 0;
            $array2[3] = 0;
            $array2[4] = 0;
            $array2[5] = 0;
            $array2[6] = 0;
            $array2[7] = 0;
            $array2[8] = 0;
            $array2[9] = 0;
            $array2[10] = 0;

            if($ispass){
                $array2[10] = 1;
            }
            if($zhicheng=="初级医师"&&$ispass){
                $array2[2] = 1;
            }else if($zhicheng=="中级医师"&&$ispass){
                $array2[3] = 1;
            }else if($zhicheng=="副高级级医师"&&$ispass){
                $array2[4] = 1;
            }else if($zhicheng=="高级医师"&&$ispass){
                $array2[5] = 1;
            }
            $age = System::getAgeByIDcard($arry[$key][4]);
            if($age<30&&$ispass){
                $array2[6] = 1;

            }else if($age>=30&&$age<40&&$ispass){
                $array2[7] = 1;

            }else if($age>=40&&$age<50&&$ispass){
                $array2[8] = 1;

            }else if($age>=50&&$ispass){
                $array2[9] = 1;

            }
            $arrayk[$keshi] = $array2;
        }else{
            if($ispass){
                $arrayk[$keshi][10] = $arrayk[$keshi][10] + 1;
            }
            if($zhicheng=="初级医师"&&$ispass){
                $arrayk[$keshi][2] = $arrayk[$keshi][2] + 1;
            }else if($zhicheng=="中级医师"&&$ispass){
                $arrayk[$keshi][3] = $arrayk[$keshi][3] + 1;
            }else if($zhicheng=="副高级级医师"&&$ispass){
                $arrayk[$keshi][4] = $arrayk[$keshi][4] + 1;
            }else if($zhicheng=="高级医师"&&$ispass){
                $arrayk[$keshi][5] = $arrayk[$keshi][5] + 1;
            }
            $age = System::getAgeByIDcard($arry[$key][4]);
            if($age<30&&$ispass){
                $arrayk[$keshi][6] = $arrayk[$keshi][6] + 1;

            }else if($age>=30&&$age<40&&$ispass){
                $arrayk[$keshi][7] = $arrayk[$keshi][7] + 1;

            }else if($age>=40&&$age<50&&$ispass){
                $arrayk[$keshi][8] = $arrayk[$keshi][8] + 1;

            }else if($age>=50&&$ispass){
                $arrayk[$keshi][9] = $arrayk[$keshi][9] + 1;

            }
        }
    }
    $heji = array(); //0 在岗人数；1 初级合格人数；2 中级合格人数；3 副高级合格人数；4 高级合格人数；5 30岁一下合格人数；
//6 30到40；7 40到50；8 50岁以上;9 总合格合计 10 总合格率
    $heji[0] = "合计";
    $heji[1] = 0;
    $heji[2] = 0;
    $heji[3] = 0;
    $heji[4] = 0;
    $heji[5] = 0;
    $heji[6] = 0;
    $heji[7] = 0;
    $heji[8] = 0;
    $heji[9] = 0;
    $heji[10] = 0;
    $heji[11] = 0;
    $data = array();
   // $headArr = array("科室名称","在岗人数","初级合格人数","中级合格人数","副高级合格人数","高级合格人数","30岁以下合格人数",
   //     "30-40岁合格人数","40-50岁合格人数","50岁以上合格人数","合计人数","合格率");

    foreach ($kkeys as $key) {
        $row = $arrayk[$key];
        $number = $row[10]/$row[1];
        $english_format_number = number_format($number*100, 1, '.', '');
        $arrayk[$key][11]=$english_format_number;
        $arrayk[$key][0]=$keshi[$key];
        array_push($data,$arrayk[$key]);
        $heji[1] = $heji[1] + $arrayk[$key][1];
        $heji[2] = $heji[2] + $arrayk[$key][2];
        $heji[3] = $heji[3] + $arrayk[$key][3];
        $heji[4] = $heji[4] + $arrayk[$key][4];
        $heji[5] = $heji[5] + $arrayk[$key][5];
        $heji[6] = $heji[6] + $arrayk[$key][6];
        $heji[7] = $heji[7] + $arrayk[$key][7];
        $heji[8] = $heji[8] + $arrayk[$key][8];
        $heji[9] = $heji[9] + $arrayk[$key][9];
        $heji[10] = $heji[10] + $arrayk[$key][10];
    }
    $number_up = $heji[10]/$heji[1];
    $ca_number = number_format($number_up*100, 1, '.', '');
    $heji[11] = $ca_number;
    array_push($data,$heji);



    closeConnection($con);

    return json_encode($data);

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

    for($i=0;$i<$c;$i++){//行
        $span = ord("A");
        for($m=0;$m<$l;$m++){//列
            //$sheet ->setCellValue($AZ[$m].($i+2), $dataArr[$i][$tableHeaderArr[$m]]);//会将00002转换成2
            // error_log($AZ[$m]."       ".$m);
            //  $span = ord("A");
            $k = $i+2;
            $A = $AZ[$m].$k;
            $sheet ->setCellValue($A, $dataArr[$i][$m]);//默认格式
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