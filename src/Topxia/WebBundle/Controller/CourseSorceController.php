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
        $con = mysqli_connect(System::$DBADDR,System::$DBUSER,System::$DBPASSWORD);
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }
        $sql = "select u.nickname nickname,ifnull(s.score,0) xuefen,c.title title,s.year year,ifnull(s.courseName,'在线课程') courseName,ifnull(s.remark,'在线') remark from user u 
        JOIN user_score s on s.userId = u.id 
        left join course c on s.courseId = c.id
        where u.id = ".$userId.";";
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
        //$paginator = new Paginator($this->get('request'), 60, 20);
        $con->close();
        error_log(json_encode($score));
        return $this->render('TopxiaWebBundle:MyCourse:score.html.twig', array(
            'score'  =>  $score,
            'num' => sizeof($score)
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