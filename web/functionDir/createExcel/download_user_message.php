<?php
require_once  'PHPExcel.php'; //用于phpExcel
require_once  'PHPExcel/Writer/Excel2007.php'; //用于输出excel文档
require_once  'PHPExcel/RichText.php';
require_once  'PHPExcel/Worksheet.php';
require_once  'System.php';

ini_set('date.timezone','Asia/Shanghai');
error_log("in come");
$nickname = $_GET['nickname'];
$truename = $_GET['truename'];
$company = $_GET['company'];
$jsonData = makeData($nickname,$truename,$company);//获取需要生成excel的数据

//$rand = microtime();//定义文件名
$rand = time();
$filePath = "saveExcel/$rand.xls";//存放目录+文件

$tabelJsonHeader = json_encode(array("员工编号","姓名","性别","出生日期","科室分类","所属科室","职称","职称分类","人员类别","身份证号码","最高学历","最高学位"));
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
    Header("Content-Disposition: attachment; filename=" . "$rand.xls");
    echo fread($file,filesize($filePath));
    fclose($file);
    exit;
}

function makeData($nickname,$truename,$company){

    $con = System::getConnection();
    $sql = "select uk.id id,u.nickname 员工编号,uk.truename 姓名,cr.title 所属科室,uk.job 职称,uk.idcard 身份证号码,uk.company 科室编码, ".
        "uk.mobile 手机号码,uk.gender 性别,uk.varcharField4 科室分类, ".
        "uk.varcharField2 职称分类,uk.varcharField3 人员分类,uk.varcharField6 最高学历,uk.varcharField3 最高学位,uk.varcharField1 出生日期 ".
        "from user u ".
        "left join user_profile uk on u.id = uk.id ".
        "left join classroom cr on cr.id = uk.company ";

    $tag = 0;
    if($nickname != null && $nickname != ''){
        if($tag == 0){
            $sql =  $sql." where u.nickname like '%".$nickname."%' ";
        }else{
            $sql =  $sql." and u.nickname like '%".$nickname."%' ";
        }
        $tag = $tag +1;
    }
    if($truename != null && $truename != ''){
        if($tag == 0){
            $sql =  $sql." where uk.truename like '%".$truename."%' ";
        }else{
            $sql =  $sql." and uk.truename like '%".$truename."%' ";
        }
        $tag = $tag +1;
    }
    if($company != null && $company != ''){
        if($tag == 0){
            $sql =  $sql." where uk.company =".$company." ";
        }else{
            $sql =  $sql." and uk.company =".$company." ";
        }
        $tag = $tag +1;
    }
    $sql = $sql." order by u.id;";
    $con = System::getConnection();
    $result = System::getManyResult($con,$sql);
    $arry = array();
    $i = 0;
    foreach ($result as $item){
        $arry[i][0] =  $item["员工编号"];
        $arry[i][1] =  $item["姓名"];
        $arry[i][2] =  $item["性别"];
        $arry[i][3] =  $item["出生日期"];
        $arry[i][4] =  $item["科室分类"];
        $arry[i][5] =  $item["所属科室"];
        $arry[i][6] =  $item["职称"];
        $arry[i][7] =  $item["职称分类"];
        $arry[i][8] =  $item["人员类别"];
        $arry[i][9] =  $item["身份证号码"];
        $arry[i][10] =  $item["最高学历"];
        $arry[i][11] =  $item["最高学位"];
        $i = $i+1;
    }

    System::closeConnection($con);

    return json_encode($arry);

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