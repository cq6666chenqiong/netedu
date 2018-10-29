<?php
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2018/3/29
 * Time: 10:20
 */

require_once  '../createExcel/System.php';

$userId = $_GET['userId'];
$lessonId = $_GET['lessonId'];
$con = System::getConnection();

$sql = "select count(1) num from course_lesson_learn set status = 'finished' where userId = ".$userId." and lessonId = ".$lessonId;
error_log($sql);
$result = System::getOneResult($con,$sql);

if($result['num'] <= 0){
    $sql = "update course_lesson_learn set status = 'finished' where userId = ".$userId." and lessonId = ".$lessonId;
    error_log($sql);
    $con = System::getConnection();
    $result = System::excuteSql($con,$sql);
}

$p = array('code' => 1);
echo json_encode($p);
