<?php
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2018/3/22
 * Time: 21:35
 */

require_once  '../createExcel/System.php';

$nickname = $_GET['nickname'];
$con = System::getConnection();
$sql = "select count(1) num from user where nickname = ".$nickname;
error_log($sql);
$con = System::getConnection();
$result = System::getOneResult($con,$sql);

if($result['num'] > 0){
    $p = array('code' => 1);
    echo json_encode($p);
}else{
    $p = array('code' => 0);
    echo json_encode($p);
}




