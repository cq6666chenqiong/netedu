<?php
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2018/3/22
 * Time: 7:39
 */
require_once  'createExcel/System.php';
$nickname = $_GET['nickname'];

    $con = System::getConnection();
    $sql = "select uk.id id,u.nickname 员工编号,uk.truename 姓名,cr.title 所属科室,uk.job 职称,uk.idcard 身份证号码,uk.company 科室编码, ".
        "uk.mobile 手机号码,uk.gender 性别,uk.varcharField4 科室分类, ".
        "uk.varcharField2 职称分类,uk.varcharField3 人员分类uk.varcharField6 最高学历,uk.varcharField3 最高学位，uk.varcharField1 出生日期 ".
        "from user u ".
        "left join user_profile uk on u.id = uk.id ".
        "left join classroom cr on cr.id = uk.company ".
        "order by id;";
    $con = System::getConnection();
    $result = System::getManyResult($con,$sql);

    header("Content-type:application/vnd.ms-excel");
    header("Content-Disposition:filename="."员工信息".".xls");

    $strexport="员工编号\t姓名\t性别\t出生日期\t科室分类\t所属科室\t职称\t职称分类\t人员类别\t身份证号码\t最高学历\t最高学位\r";
    foreach ($result as $row){
        $gender = $row["性别"];
        if($gender == "female"){
            $gender = "女";
        }else{
            $gender = "男";
        }
        $strexport.=$row["员工编号"]."\t";
        $strexport.=$row["姓名"]."\t";
        $strexport.=$gender."\t";
        $strexport.=$row["出生日期"]."\t";
        $strexport.=$row["科室分类"]."\t";
        $strexport.=$row["所属科室"]."\t";
        $strexport.=$row["职称"]."\t";
        $strexport.=$row["职称分类"]."\t";
        $strexport.=$row["人员类别"]."\t";
        $strexport.=$row["身份证号码"]."\t";
        $strexport.=$row["最高学历"]."\t";
        $strexport.=$row["最高学位"]."\r";

    }
    $strexport=iconv('UTF-8',"GB2312//IGNORE",$strexport);
    exit($strexport);
    echo "wancheng";
