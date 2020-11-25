<?php
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/6/8
 * Time: 10:24
 */

namespace Topxia\WebBundle\Controller;

use Topxia\Common\Paginator;
use Topxia\Common\ArrayToolkit;
use Topxia\Service\Util\myBananaLiveClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Topxia\System;
use Topxia\AdminBundle\Controller\httpclient;



class CourseSorceController extends BaseController
{

    public function indexAction(Request $request,$userId){
        $year = $request->query->get("year");
        $startTime = 0;
        $endTime = 0;
        if(is_null($year)||$year==''){
            $year=intval (date("Y"));
            $startTime = mktime(0,0,0,1,1,$year);
            $endTime = mktime(23,59,59,12,31,$year);
        }else{
            $startTime = mktime(0,0,0,1,1,$year);
            $endTime = mktime(23,59,59,12,31,$year);
        }

        $con = mysqli_connect(System::$DBADDR,System::$DBUSER,System::$DBPASSWORD);
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }

        $sql = "select id,title from classroom";
        $cengjiMap = array();
        error_log($sql);
        mysqli_select_db($con,System::$DBNAME);
        mysqli_multi_query($con,"set names 'utf8'");
        $result = mysqli_query($con,$sql);
        if(!empty($result)){
            while(($row = mysqli_fetch_array($result)) != null){
                //$cengjiMap[$row.id] = $row.title;
                //error_log($row["id"]);
                //error_log($row["title"]);
                $cengjiMap[$row["id"]] = $row["title"];
                //error_log(json_encode($row));
            }
        }
        $cengjiMap[0] = "N0";
		$cengjiMap[1] = "N1";
		$cengjiMap[2] = "N2";
		$cengjiMap[3] = "N3";
		$cengjiMap[4] = "N4";
		$cengjiMap[5] = "GN1";
		$cengjiMap[34] = "线下层级课程";
		
        error_log("iiiii===".json_encode($cengjiMap));

        $sql = "select u.nickname nickname,up.truename truename,up.company cengji,up.varcharField3 endemic_area,
        IF(up.varcharField4='' , '其他' , up.varcharField4) professional_groups,up.varcharField5 teacher,up.job duty
         from user u 
        JOIN user_profile up on up.id = u.id 
        where u.id = ".$userId;
        $thisUser = "";
        error_log($sql);
        mysqli_select_db($con,System::$DBNAME);
        mysqli_multi_query($con,"set names 'utf8'");
        $result = mysqli_query($con,$sql);
        $score = array();
        if(!empty($result)){
            while(($row = mysqli_fetch_array($result)) != null){
                $thisUser = $row;
            }
        }



        $sql = "select u.nickname nickname,up.truename truename,up.company cengji,up.varcharField3 endemic_area,
        IF(up.varcharField4='' , '其他' , up.varcharField4) professional_groups,up.varcharField4 teacher,up.job duty,
        ifnull(s.score,0) xuefen,c.title title,s.year year,ifnull(s.courseName,'在线课程') courseName,ifnull(s.remark,'在线') remark,c.buyable type from user u 
        JOIN user_profile up on up.id = u.id 
        JOIN user_score s on s.userId = u.id 
        left join course c on s.courseId = c.id
        where u.id = ".$userId;
        if($startTime > 0){
            $sql = $sql." and c.createdTime > ".$startTime;
            $sql = $sql." and c.createdTime < ".$endTime;
        }

        error_log($sql);
        mysqli_select_db($con,System::$DBNAME);
        mysqli_multi_query($con,"set names 'utf8'");
        $result = mysqli_query($con,$sql);
        $score = array();
        if(!empty($result)){
            while(($row = mysqli_fetch_array($result)) != null){
                array_push($score,$row);
            }
        }
        $sql = "select * from user_score where courseId < 0 and userId = ".$userId." and year = ".$year;
        mysqli_select_db($con,System::$DBNAME);
        mysqli_multi_query($con,"set names 'utf8'");
        $result = mysqli_query($con,$sql);
        $other = array();
        if(!empty($result)){
            while(($row = mysqli_fetch_array($result)) != null){
                array_push($other,$row);
            }
        }

        $totalScore = 0;
        foreach($score as $key=>$val)
        { //使用循环结构遍历数组,获取学号
            $totalScore = $totalScore + $val['xuefen'];
        }
        foreach($other as $key=>$val)
        { //使用循环结构遍历数组,获取学号
            $totalScore = $totalScore + $val['score'];
        }


        //$paginator = new Paginator($this->get('request'), 60, 20);
        $con->close();
        error_log(json_encode($score));
        return $this->render('TopxiaWebBundle:MyCourse:score.html.twig', array(
            'score'  =>  $score,
            'other' => $other,
            'num' => sizeof($score),
            'userId'=> $userId,
            'totalScore'=> $totalScore,
            'year'=>$year,
            'thisUser'=>$thisUser,
            'cengjiMap'=>$cengjiMap
        ));
    }

    public function memberScoreAction(Request $request)
    {
        error_reporting(0);
        /*error_log("ss");
        $userNum = $request->query->get('memberNum');
        $con = System::getConnection();
        $sql = "select u.nickname memberNum, p.truename truename ,ifnull(s.score,0) score ,c.title title,ifnull(s.courseName,'在线课程'),s.year year, 
        ifnull(s.remark,'在线') remark from user_score s join user u on s.userId = u.id join user_profile p on p.id = u.id 
        left join course c on c.id = s.courseId
        where u.nickname =  '" . $userNum . "';";
        $result = System::getManyResult($con, $sql);
        error_log(json_encode(
            $result
        ));
        System::closeConnection($con);*/
        $memberNum = $request->query->get("memberNum");
        error_log($memberNum);
        $url = "http://localhost:8080/statistics/getMemberDetailScore?nickname=".$memberNum;
        $http = new HttpClient($url);
        error_log($url);
        $http->get();
        /*$ary = [];
        $ary[0] = "sss";
        $post_data = array(
            'name' => 'eeee',
            'password' => 'handan'
        );
        $http->send_post($url,$post_data);*/
        $result = $http->getBody();
        error_log($result);
        //return new Response(json_encode($result));
        return new Response(json_encode($result));
        //header("content-type:text/html;charset=utf8");
        //echo json_encode($result,JSON_UNESCAPED_UNICODE);
    }
}