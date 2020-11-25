<?php
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/6/8
 * Time: 15:52
 */

namespace Topxia\AdminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\FileToolkit;
use Topxia\Component\OAuthClient\OAuthClientFactory;
use Topxia\Common\Paginator;
use Topxia\System;
use Topxia\AdminBundle\Controller\httpclient;

class SorceStatisticalController  extends BaseController
{
    public function indexAction(Request $request){
        $ip = System::$URL;
        error_log("indexAction");
        ini_set('display_errors','off');
        $year = $request->query->get("year");

        $area = $request->query->get("area");
        error_log("============================".$area);
        $tname = $request->query->get("truename");
        $truename = $request->query->get("truename");
        if(is_null($year)||$year==''){
            $year=intval (date("Y"));
        }
        if(is_null($truename)||$truename==''){
            $truename="";
        }else{
            $truename=urlencode($truename);
        }

        if(is_null($area)||$area==''){
            $area="";
        }else{
            $area=urlencode($area);
        }

        $beginTime = date($year."-01-01 00:00:00");
        $endTime = date($year."-12-31 23:59:59");
        //$url = 'http://123.56.7.13:8080/netedustatistics/statistics/getScoreByGradeCount?year='.$year.'&cengji='.$department.'&name='.$truename;
       // $url = 'http://localhost:8080/statistics/getMemberNum?year='.$year.'&cengji='.$department.'&name='.$truename;
        $url = 'http://'.$ip.'/statistics/getMemberNum?year='.$year.'&area='.$area.'&name='.$truename;

        error_log($url);
        $http = new HttpClient($url);
        $http->get();
        //error_log("result===========".$http->getBody());
        $jsonCount = json_decode($http->getBody(),true);
        $num = $jsonCount['sum'];
        error_log("result===========".$http->getBody());
       // $num = 1000;
        $paginator = new Paginator($this->get('request'), $num, 20);
        if(is_null($paginator->getCurrentPage())){
            $paginator->setCurrentPage(1);
        }

       // $http = new HttpClient('http://123.56.7.13:8080/netedustatistics/statistics/getScoreByGrade?start='.$paginator->getCurrentPage().'&plimit=10&year='.$year.'&cengji='.$department.'&name='.$truename);
        //$url = 'http://localhost:8080/statistics/getMemberScoreStatistics?start='.$paginator->getCurrentPage().'&plimit=10&year='.$year.'&cengji='.$department.'&name='.$truename;
        $url = 'http://'.$ip.'/statistics/getMemberScoreStatistics?start='.$paginator->getCurrentPage().'&plimit=10&year='.$year.'&area='.$area.'&name='.$truename;
       // $url = 'http://localhost:8080/statistics/getMemberScoreStatistics';
        $http = new HttpClient($url);
        //error_log($url);
        $http->get();
        /*$ary = [];
        $ary[0] = "sss";
        $post_data = array(
            'name' => 'eeee',
            'password' => 'handan'
        );
        $http->send_post($url,$post_data);*/
        error_log("result===========".$http->getBody());
        $json = json_decode($http->getBody(),true);


        $url = 'http://'.$ip.'/statistics/getEndemicArea';
        //error_log($url);
        $http = new HttpClient($url);
        $http->get();
        //error_log("result===========".$http->getBody());

        $endemicArea = json_decode($http->getBody(),true);



  /*

        $beginTime = date($year."-01-01 00:00:00");
        $endTime = date($year."-12-31 23:59:59");
        $condition="";
        $condition1="";




        /*
        if(!is_null($department)&&$department!=''){
            $condition = $condition." and uk.company = ".$department;
        }
        if(!is_null($truename)&&$truename!=''){
            //$condition = " and uk.truename = '".$truename."'";
            $condition = $condition." and uk.truename like '%".$truename."%'";
        }
        if(!is_null($year)&&$year!=''){
            //$condition = " and uk.truename = '".$truename."'";
            $condition1 = $condition1." and us.year = ".$year;
        }
        $con = System::getConnection();
        */
        /*
        $sql = "select count(1) count from user u ".
            "left join user_profile uk on u.id = uk.id ".
            "left outer join user_score us on uk.id = us.userId ".
            "left join course c on us.courseId = c.id ".
            "where (us.year = ".$year." or us.year is null)  ".
            $condition." ;";
        */
        /*
        $sql =  "select count(1) count ".
                "from ( ".
                        " select u.id id,uk.truename truename from user u left outer join user_profile uk on u.id = uk.id ".
                        " where 1 = 1".$condition.
                ") u1 ".
                " left join ( ".
                        " select us.userId userId,us.score score from user_score us left outer join course c on us.courseId = c.id ".
                        " where 1=1".$condition1.
                ") u2 on u1.id = u2.userId ;";
         $resultNum =  System::getOneResult($con,$sql);
         $num = $resultNum['count'];
         $paginator = new Paginator($this->get('request'), $num, 20);
         if(is_null($paginator->getCurrentPage())){
                $paginator->setCurrentPage(1);
         }
        $sql = "select u1.id id,u1.nickname nickname,u2.title title,ifnull(u2.score,0) score,u2.createTime createTime,u1.job job,u1.idcard idcard,u1.department department,u1.truename truename ".
            "from ( ".
            " select u.id id,uk.truename truename,u.nickname nickname,uk.job job,uk.idcard idcard,uk.company department from user u left outer join user_profile uk on u.id = uk.id ".
            " where 1 = 1".$condition.
            ") u1 ".
            " left join ( ".
            " select c.title title,us.userId userId,us.score score,us.createTime createTime from user_score us left outer join course c on us.courseId = c.id ".
            " where 1=1".$condition1.
            ") u2 on u1.id = u2.userId ".
            " limit ".(($paginator->getCurrentPage()-1)*20).",20 ;";
        $result = System::getManyResult($con,$sql);

        $arryw = array();
        $keys = array(); //userId集合
        for($i=0;$i<count($result);$i++){
            $row = $result[$i];
            $key = $row['id'];
            if(!array_key_exists($key,$arryw)){
                $arry1 = array(); //0 id;1 用户名;2 总学分；3 职称；4 是否合格13分
                array_push($keys,$key);
                array_push($arry1,$row['id']);
                array_push($arry1,$row['nickname']);
                array_push($arry1,$row['score']);
                array_push($arry1,$row['job']);
                array_push($arry1,$row['idcard']);
                array_push($arry1,$row['department']);
                error_log("ks==1111===".$row['department']);
                if($row['score']>=13){
                    array_push($arry1,true);
                }else{
                    array_push($arry1,false);
                }
                $arryw[$key] = $arry1;
                $arryw[$key][7] = $row['truename'];
            }else{
                $arryw[$key][2] = $arryw[$key][2] + $row['score'];
                if($arryw[$key][2]>=13){
                    $arryw[$key][6] = true;
                }else{
                    $arryw[$key][6] = false;
                }
            }
        }
        $sql = "select id,title from classroom";
        $result2 = System::getManyResult($con,$sql);
        $departments = array();
        foreach ($result2 as $item) {
            $departments[$item['id']] = $item['title'];
        }

        $arry = array();
        foreach ($arryw as $item){
            $ar = array();
            if(is_null($item[5])){
                continue;
            }
            $ar[0] = $item[5]!=''?$departments[$item[5]]:'科室未定义';
            $ar[0] = $ar[0]!=''?$ar[0]:'';
            $ar[1] = $item[1];
            $ar[2] = $item[3];
            //$ar[3] = System::getAgeByIDcard($item[4]);;
            $ar[3] = $item[7];
            $sql1 = "select DISTINCT(cll.courseId) courseId from course_lesson_learn cll ".
                    "left join course c on c.id = cll.courseId  ".
                    "where cll.userId = ".$item[0]."  and c.buyable = 1 ".
                    "and cll.finshTime>='".$beginTime."' and cll.finshTime <= '".$endTime."';";
            $rresult1 = System::getManyResult($con,$sql1);
            $sql2 = "select DISTINCT(us.courseId) courseId  from user_score us ".
                    "where us.userId = ".$item[0]." ".
                    "and us.year = '".$year."';";
            $rresult2 = System::getManyResult($con,$sql2);
            $arr1 = array();
            foreach ($rresult2 as $r2){
                array_push($arr1,$r2['courseId']);
            }
            $tag = true;
            $remark1 = "";
            foreach ($rresult1 as $r1){
               if(!in_array($r1['courseId'],$arr1)){
                   $tag = false;
                   $remark1 = "有必修课未合格";
                   break;
               }
            }
            $remark2 = "";
            $score = $item[2];
            if($score<13){
                $remark2 = "总学分小于13分";
            }
            if($score>=13&&$tag){
                $ar[4] = "合格";
            }else{
                $ar[4] = "不合格";
            }
            $ar[5] = $remark2.",".$remark1;
            array_push($arry,$ar);
        }
        $sql = "select id,title from classroom";
        $result2 = System::getManyResult($con,$sql);
        $classr = array();
        error_log(json_encode($arry));
        System::closeConnection($con);
        */
        /*;return $this->render('TopxiaAdminBundle:sorce:score.html.twig', array(
            'arry'                       =>  $arry,
            'classr'                     =>  $result2,
            'paginator'                  =>  $paginator,
            'department'                 =>  $department,
            'year'                        =>  $year,
            'truename'                    =>  $truename
        ));*/
        return $this->render('TopxiaAdminBundle:sorce:score.html.twig', array(
            'year'                        =>  $year,
            'truename'                   => $tname,
            'paginator'                  =>  $paginator,
            'arry'                       =>  $json,
            'endemicArea'               => $endemicArea,
            'area'                       => urldecode($area)
        ));
    }

    public function statisticalByDepartmentAction(Request $request){
        ini_set('display_errors','off');
        $year = $request->query->get("year");
        if(is_null($year)||$year==''){
            error_log("this");
            error_log(intval (date("Y")));
            $year=intval (date("Y"));
        }

        $beginTime = date($year."-01-01 00:00:00");
        $endTime = date($year."-12-31 23:59:59");
        $ip = System::$URL;
        //$http = new HttpClient('http://123.56.7.13:8080/netedustatistics/statistics/getScoreByBingQu?year='.$year);
        //$http = new HttpClient('http://localhost:8080/statistics/getEndemicAreaStatistics?year='.$year);
        $http = new HttpClient('http://'.$ip.'/statistics/getEndemicAreaStatistics?year='.$year);
        $http->get();
        $json = json_decode($http->getBody(),true);
		
		error_log(json_encode($json));
		
		
		

        return $this->render('TopxiaAdminBundle:sorce:departmentsorce.html.twig', array(
            'year'                        =>  $year,
            'arry'                       =>  $json

        ));
    }


    public function uploadScoreAction(Request $request){

        $conditions = $request->query->all();

        error_log("线下上传成绩");

        return $this->render('TopxiaAdminBundle:sorce:uploadScore.html.twig', array(

        ));
    }



}