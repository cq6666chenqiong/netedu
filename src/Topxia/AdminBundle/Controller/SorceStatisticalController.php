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

        //error_log($url);
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
        error_log("result===========".$http->getBody());
        $json = json_decode($http->getBody(),true);

        /*
        $con = System::getConnection();
        $sql = "select uk.id id,u.nickname nickname,c.title title,us.score score,us.createTime createTime,uk.job job,uk.idcard idcard,uk.company department,uk.varcharField2 varcharField2  from user u ".
                "left outer join user_profile uk on u.id = uk.id ".
                "left outer join user_score us on uk.id = us.userId ".
                "left outer join course c on us.courseId = c.id ".
                "where us.year = ".$year." ;";
        $result = System::getManyResult($con,$sql);
        $arry = array();
        $keys = array(); //userId集合

        for($i=0;$i<count($result);$i++){
              $row = $result[$i];
              $key = $row['id'];
              if(!array_key_exists($key,$arry)){
                  $arry1 = array(); //0 id;1 用户名;2 总学分；3 职称；4 是否合格13分
                  array_push($keys,$key);
                  array_push($arry1,$row['id']);
                  array_push($arry1,$row['nickname']);
                  array_push($arry1,$row['score']);
                  array_push($arry1,$row['job']);
                  array_push($arry1,$row['idcard']);
                  array_push($arry1,$row['department']);
                  //array_push($arry1,$row['varcharField2']);
                 // $arry1[7] = $row['varcharField2'];
                  if($row['score']>=13){
                      array_push($arry1,true);
                  }else{
                      array_push($arry1,false);
                  }
                  $arry[$key] = $arry1;
                  $arry[$key][7] = $row['varcharField2'];
              }else{
                  $arry[$key][2] = $arry[$key][2] + $row['score'];

                  if($arry[$key][2]>=13){
                      $arry[$key][6] = true;
                  }else{
                      $arry[$key][6] = false;
                  }

              }
        }
        error_log(json_encode($arry));
        error_log(json_encode($keys));
        $arrayk = array();
        $kkeys = array();  //科室集合
        error_log(json_encode($keys));
        foreach($keys as $key){
            if($key==1){
                error_log("11111111");
            }
            $keshi = $arry[$key][5];
            $zhicheng = $arry[$key][7];
            $ispass = $arry[$key][6];
            $sql1 = "select DISTINCT(cll.courseId) courseId from course_lesson_learn cll ".
                "left join course c on c.id = cll.courseId  ".
                "where cll.userId = ".$row['id']."  and c.buyable = 1 ".
                "and cll.finshTime>='".$beginTime."' and cll.finshTime <= '".$endTime."';";
            $rresult1 = System::getManyResult($con,$sql1);
            $sql2 = "select DISTINCT(us.courseId) courseId  from user_score us ".
                "where us.userId = ".$row['id']." ".
                "and us.year = '".$year."';";
            $rresult2 = System::getManyResult($con,$sql2);
            $arr1 = array();
            foreach ($rresult2 as $r2){
                array_push($arr1,$r2['courseId']);
            }
            $tag = true;
            foreach ($rresult1 as $r1){
                if(!in_array($r1['courseId'],$arr1)){
                    $tag = false;
                    break;
                }
            }
            if($ispass&&$tag){
                $ispass = true;
            }else{
                $ispass = false;
            }
            $array2 = array(); //0 科室；1在岗人数；2 初级合格人数；3 中级合格人数；4 副高级合格人数；5 高级合格人数；6 30岁一下合格人数；
            //7 30到40；8 40到50；9 50岁以上;10 合计
            if(!array_key_exists($keshi,$arrayk)){
                array_push($array2,$keshi);
                array_push($kkeys,$keshi);
                $sql1 = "select count(1) count from user_profile where company = '".$keshi."';";
                $result1 = System::getOneResult($con,$sql1);
                $count = $result1['count'];
                error_log($count);
                $array2[1] = $count;
                $array2[2] = 0;
                $array2[3] = 0;
                $array2[4] = 0;
                $array2[5] = 0;
                $array2[6] = 0;
                $array2[7] = 0;
                $array2[8] = 0;
                $array2[9] = 0;
                $array2[10] = 0;

                if($ispass){
                    $array2[10] = 1;
                }
                if(strstr($zhicheng,"初级")&&$ispass){
                    $array2[2] = 1;
                }else if(strstr($zhicheng,"中级")&&$ispass){
                    $array2[3] = 1;
                }else if(strstr($zhicheng,"副高级")&&$ispass){
                    $array2[4] = 1;
                }else if(strstr($zhicheng,"高级")&&$ispass){
                    $array2[5] = 1;
                }
                $age = System::getAgeByIDcard($arry[$key][4]);
                if($age<30&&$ispass){
                    $array2[6] = 1;

                }else if($age>=30&&$age<40&&$ispass){
                    $array2[7] = 1;

                }else if($age>=40&&$age<50&&$ispass){
                    $array2[8] = 1;

                }else if($age>=50&&$ispass){
                    $array2[9] = 1;

                }
                $arrayk[$keshi] = $array2;
            }else{
                if($ispass){
                    $arrayk[$keshi][10] = $arrayk[$keshi][10] + 1;
                }
                if(strstr($zhicheng,"初级")&&$ispass){
                    $arrayk[$keshi][2] = $arrayk[$keshi][2] + 1;
                }else if(strstr($zhicheng,"中级")&&$ispass){
                    $arrayk[$keshi][3] = $arrayk[$keshi][3] + 1;
                }else if(strstr($zhicheng,"福高级")&&$ispass){
                    $arrayk[$keshi][4] = $arrayk[$keshi][4] + 1;
                }else if(strstr($zhicheng,"高级")&&$ispass){
                    $arrayk[$keshi][5] = $arrayk[$keshi][5] + 1;
                }
                $age = System::getAgeByIDcard($arry[$key][4]);
                if($age<30&&$ispass){
                    $arrayk[$keshi][6] = $arrayk[$keshi][6] + 1;

                }else if($age>=30&&$age<40&&$ispass){
                    $arrayk[$keshi][7] = $arrayk[$keshi][7] + 1;

                }else if($age>=40&&$age<50&&$ispass){
                    $arrayk[$keshi][8] = $arrayk[$keshi][8] + 1;

                }else if($age>=50&&$ispass){
                    $arrayk[$keshi][9] = $arrayk[$keshi][9] + 1;

                }
            }
        }
        $heji = array(); //0 在岗人数；1 初级合格人数；2 中级合格人数；3 副高级合格人数；4 高级合格人数；5 30岁一下合格人数；
            //6 30到40；7 40到50；8 50岁以上;9 总合格合计 10 总合格率
        $heji[0] = 0;
        $heji[1] = 0;
        $heji[2] = 0;
        $heji[3] = 0;
        $heji[4] = 0;
        $heji[5] = 0;
        $heji[6] = 0;
        $heji[7] = 0;
        $heji[8] = 0;
        $heji[9] = 0;
        $heji[10] = 0;
        foreach ($kkeys as $key) {
            $row = $arrayk[$key];
            if($row[1]==0){
                $number = 0.0;
            }else{
                $number = ($number = $row[10]/$row[1]);
            }
            $english_format_number = number_format($number*100, 1, '.', '');
            $arrayk[$key][11]=$english_format_number;
            $heji[0] = $heji[0] + $arrayk[$key][1];
            $heji[1] = $heji[1] + $arrayk[$key][2];
            $heji[2] = $heji[2] + $arrayk[$key][3];
            $heji[3] = $heji[3] + $arrayk[$key][4];
            $heji[4] = $heji[4] + $arrayk[$key][5];
            $heji[5] = $heji[5] + $arrayk[$key][6];
            $heji[6] = $heji[6] + $arrayk[$key][7];
            $heji[7] = $heji[7] + $arrayk[$key][8];
            $heji[8] = $heji[8] + $arrayk[$key][9];
            $heji[9] = $heji[9] + $arrayk[$key][10];
        }
        if($heji[0]==0){
            $number_up = 0.0;
        }else{
            $number_up = $heji[9]/$heji[0];
        }

        $ca_number = number_format($number_up*100, 1, '.', '');
        $heji[10] = $ca_number;
        $sql = "select id,title from classroom";
        $result2 = System::getManyResult($con,$sql);
        $keshi = array();

        foreach ($result2 as $r){
            $keshi[$r['id']] = $r['title'];
        }
        error_log(json_encode($arrayk));
        System::closeConnection($con);

        return $this->render('TopxiaAdminBundle:sorce:departmentsorce.html.twig', array(
            'arrayk'                       => $arrayk,
            'keshi'                        => $keshi,
            'heji'                         => $heji,
            'kkeys'                        => $kkeys,
            'year'                         => $year
        ));
        */

        return $this->render('TopxiaAdminBundle:sorce:departmentsorce.html.twig', array(
            'year'                        =>  $year,
            'arry'                       =>  $json

        ));
    }



}