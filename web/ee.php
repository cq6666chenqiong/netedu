<?php
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2018/3/20
 * Time: 11:27
 */

    header("Content-type:application/vnd.ms-excel");
    header("Content-Disposition:filename="."aa".".xls");

    $strexport="编号\t姓名\t性别\t年龄\r";
    //foreach ($list as $row){

        $strexport.="1"."\t";
        $strexport.="1"."\t";
        $strexport.="1"."\t";
        $strexport.="1"."\r";

    //}
    $strexport=iconv('UTF-8',"GB2312//IGNORE",$strexport);
    exit($strexport);
    echo "wancheng";
