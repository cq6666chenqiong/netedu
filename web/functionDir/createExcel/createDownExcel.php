<?php
require_once  'PHPExcel.php'; //用于phpExcel
require_once  'PHPExcel/Writer/Excel2007.php'; //用于输出excel文档
require_once  'PHPExcel/RichText.php';
require_once  'PHPExcel/Worksheet.php';

$mdb = mysqli_connect('127.0.0.1','root','')
	or die("连接数据库失败!</br>");
$db = mysqli_select_db($mdb,System::$DBNAME)
	or die("选择db失败</br>");
//echo "connect success";
// 避免中文出现乱码
mysqli_multi_query($mdb,"set names 'utf8'");


$jsonData = getData($mdb);//获取需要生成excel的数据

//$rand = microtime();//定义文件名
$rand = time();
$filePath = "saveExcel/$rand.xlsx";//存放目录+文件
$tabelJsonHeader = json_encode(array(//定义excel文件头部
                0=>"id",//自增索引，用于根据此键获取对应的数据库值，数据库的键或者重命名的键（字段）
                1=>"title",
                2=>"status",
                ));

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
    $l = 3;
    //$AZ = setAZ(11);
    /*
    for($m=0;$m<$l;$m++){//表头
        //$A = $AZ[$m]."1";
        $sheet ->setCellValue($AZ[$m], $tableHeaderArr["T".$m]);//
    }
    */
    for($i=0;$i<$c;$i++){//行
        $span = ord("A");
        for($m=0;$m<$l;$m++){//列
            //$sheet ->setCellValue($AZ[$m].($i+2), $dataArr[$i][$tableHeaderArr[$m]]);//会将00002转换成2
           // error_log($AZ[$m]."       ".$m);
          //  $span = ord("A");

            $j = chr($span);
            error_log($j);
            $sheet ->setCellValue($j.($i+1), $dataArr[$i][$tableHeaderArr[$m]]);//默认格式
            $span =  $span + 1;
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