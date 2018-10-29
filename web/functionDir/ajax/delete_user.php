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
$sql = "select id from user where nickname = ".$nickname;
error_log($sql);
$con = System::getConnection();
$result = System::getOneResult($con,$sql);

$id = $result["id"];
$sql = "delete from user where id = ".$id;
$result = System::delete($con,$sql);
$sql = "delete from user_profile where id = ".$id;
$result = System::delete($con,$sql);
$sql = "delete from user_score where userId = ".$id;
$result = System::delete($con,$sql);
$sql = "delete from classroom_member where userId = ".$id;
$result = System::delete($con,$sql);
$sql = "delete from course_member where userId = ".$id;
$result = System::delete($con,$sql);
$sql = "delete from course_lesson_learn where userId = ".$id;
$result = System::delete($con,$sql);
$sql = "delete from testpaper_result where userId = ".$id;
$result = System::delete($con,$sql);
$sql = "delete from status where userId = ".$id;
$result = System::delete($con,$sql);


$p = array('code' => 1);
echo json_encode($p);





