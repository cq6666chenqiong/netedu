<?php
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2018/3/22
 * Time: 10:34
 */

require_once  'createExcel/System.php';

$con = System::getConnection();
$sql = "select uk.id id,u.nickname 员工编号,uk.truename 真实姓名,cr.title 科室名称,uk.job 职称,uk.idcard 身份证号码,uk.company 科室编码, ".
    "uk.mobile 手机号码,uk.gender 性别,uk.varcharField4 一级科室 ".
    "from user u ".
    "left join user_profile uk on u.id = uk.id ".
    "left join classroom cr on cr.id = uk.company ".
    "limit 1,5;";
$con = System::getConnection();
$result = System::getManyResult($con,$sql);

header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:filename="."员工信息".".xls");

$strexport="员工编号\t姓名\t性别\t一级科室\t科室名称\t手机号码\t职称\r";
foreach ($result as $row){
    $gender = $row["性别"];
    if($gender == "female"){
        $gender = "女";
    }else{
        $gender = "男";
    }
    $strexport.=$row["员工编号"]."\t";
    $strexport.=$row["真实姓名"]."\t";
    $strexport.=$gender."\t";
    $strexport.=$row["一级科室"]."\t";
    $strexport.=$row["科室名称"]."\t";
    $strexport.=$row["手机号码"]."\t";
    $strexport.=$row["职称"]."\r";
}
$strexport=iconv('UTF-8',"GB2312//IGNORE",$strexport);
exit($strexport);
echo "wancheng";