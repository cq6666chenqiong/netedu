<?php
/**
 * PHPEXCEL生成excel文件
 * @author:firmy
 * @desc 支持任意行列数据生成excel文件，暂未添加单元格样式和对齐
 */

require_once 'phpExcelWriter/PHPExcel.php';
require_once 'phpExcelWriter/PHPExcel/Reader/Excel2007.php';
require_once 'phpExcelWriter/PHPExcel/Reader/Excel5.php';
include_once 'phpExcelWriter/PHPExcel/IOFactory.php';

$fileName = "test_excel";
$headArr = array("科室名称","在岗人数","初级合格人数","中级合格人数","副高级合格人数","高级合格人数","30岁以下合格人数",
    "30-40岁合格人数","40-50岁合格人数","50岁以上合格人数","合计人数","合格率");
//提取数据
$con = getConnection();
$sql = "select uk.id id,u.nickname nickname,c.title title,us.score score,us.createTime createTime,uk.job job,uk.idcard idcard,uk.company department  from user u ".
    "left join user_profile uk on u.id = uk.id ".
    "left join user_score us on uk.id = us.userId ".
    "join course c on us.courseId = c.id;";
$con = getConnection();
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
error_log(json_encode($arry));
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



//$data = array(array(1,2),array(1,3),array(5,7));
getExcel($fileName,$headArr,$data);

function getExcel($fileName,$headArr,$data){
    if(empty($data) || !is_array($data)){
        die("data must be a array");
    }
    if(empty($fileName)){
        exit;
    }
    $date = date("Y_m_d",time());
    $fileName .= "_{$date}.xlsx";

//创建新的PHPExcel对象
    $objPHPExcel = new PHPExcel();
    $objProps = $objPHPExcel->getProperties();


//设置表头B
    $key = ord("A");
    foreach($headArr as $v){
        $colum = chr($key);
        $objPHPExcel->setActiveSheetIndex(0) ->setCellValue($colum.'1', $v);
        $key += 1;
    }

    $column = 2;
    $objActSheet = $objPHPExcel->getActiveSheet();
    foreach($data as $key => $rows){ //行写入
        $span = ord("");
        foreach($rows as $keyName=>$value){// 列写入
            $j = chr($span);
            $objActSheet->setCellValue($j.$column, $value);
            $span++;
        }
        $column++;
    }

    $fileName = iconv("utf-8", "gb2312", $fileName);
//重命名表
    $objPHPExcel->getActiveSheet()->setTitle('Simple');
//设置活动单指数到第一个表,所以Excel打开这是第一个表
    $objPHPExcel->setActiveSheetIndex(0);
//将输出重定向到一个客户端web浏览器(Excel2007)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header("Content-Disposition: attachment; filename=\"$fileName\"");
    header('Cache-Control: max-age=0');
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    if(!empty($_GET['excel'])){
        $objWriter->save('php://output'); //文件通过浏览器下载
    }else{
        $objWriter->save($fileName); //脚本方式运行，保存在当前目录
    }
    exit;

}

?>