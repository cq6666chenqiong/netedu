<?php

/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/8/29
 * Time: 9:58
 */
$file_name = "scores.xls";
//$file_dir = "D:\\FK\\";
$file_dir = "/var/modfile/";
error_log($file_dir.$file_name);
if(file_exists($file_dir.$file_name)){
    $file = fopen($file_dir.$file_name,"r");
    Header("Content-type: application/octet-stream");
    Header("Accept-Ranges: bytes");
    Header("Accept-Length: ".filesize($file_dir . $file_name));
    Header("Content-Disposition: attachment; filename=" . $file_name);
    echo fread($file,filesize($file_dir.$file_name));
    fclose($file);
    exit;
}else{
    //echo "不能";
}

?>