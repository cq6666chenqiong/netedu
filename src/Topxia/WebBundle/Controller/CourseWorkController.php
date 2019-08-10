<?php
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/6/9
 * Time: 11:34
 */

namespace Topxia\WebBundle\Controller;

use Topxia\Common\Paginator;
use Topxia\Common\ArrayToolkit;
use Symfony\Component\HttpFoundation\Request;
use Topxia\Service\Question\Type\QuestionTypeFactory;
use Topxia\System;
use Topxia\AdminBundle\Controller\httpclient;

class CourseWorkController extends BaseController
{

    public function indexAction(Request $request,$userId){

        $pass=0;
        return $this->render('TopxiaWebBundle:MyCourse:work.html.twig', array(
            'userId' => $userId,
            'pass' => $pass
        ));

    }


    public function addAction(Request $request,$userId){
        $pass = 1;
        $work = $request->request->get('work');
        $gc = $work["gc"];
        $gentai = $work["gentai"];
        $yeban = $work["yeban"];
        $xshd = $work["xshd"];
        $other = $work["other"];
        $volume = $work["volume"];
        $filepath = $work["filepath"];
        $hnum = $work["hnum"];
        $remark = $work["remark"];
        $time = date('Y-m-d');

        $con = mysqli_connect(System::$DBADDR,System::$DBUSER,System::$DBPASSWORD);
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }
        $sql = "INSERT INTO `work` (`userId`,`gc`, `gentai`, `yeban`, `xshd`, `other`, 
		`volume`, `filepath`, `hnum`, `remark`, `createdTime`)
        VALUES (
            '".$userId."',
            '".$gc."',
            '".$gentai."',
            '".$yeban."',
            '".$xshd."',
            '".$other."',
            '".$volume."',
            '".$filepath."',
            '".$hnum."',
            '".$remark."',
             ".$time."
        );";
        mysqli_select_db($con,System::$DBNAME);
        mysqli_query($con,"set names 'utf8'");
        $result = mysqli_query($con,$sql);
        error_log($sql);
        mysqli_close($con);
        return $this->render('TopxiaWebBundle:MyCourse:work.html.twig', array(
            'pass'     => $pass,
            'userId' => $userId
        ));

    }

    public function batstudentindexAction(Request $request,$courseId){
        $classr = array();
        $memberTypes = array();
        $con = mysqli_connect(System::$DBADDR,System::$DBUSER,System::$DBPASSWORD);
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }
        mysqli_select_db($con,System::$DBNAME);
        mysqli_query($con,"set names 'utf8'");
        $result = mysqli_query($con,"select id,title from classroom where status = 'published'");
        if(!is_null($result)){
            while($row = mysqli_fetch_array($result)){
                array_push($classr,$row);
            }
        }


        mysqli_select_db($con,System::$DBNAME);
        mysqli_query($con,"set names 'utf8'");
        $result = mysqli_query($con,"select distinct(varcharField3) memberTypeName  from user_profile");
        if(!is_null($result)){
            while($row = mysqli_fetch_array($result)){
                array_push($memberTypes,$row);
            }
        }

        mysqli_close($con);
        $course = array();
        $course['id'] = $courseId;
        return $this->render('TopxiaWebBundle:MyCourse:batstudentcourse.htm.twig', array(
            'classr'     => $classr,
            'courseId'  =>$courseId,
            'memberTypes' => $memberTypes,
            'course'     => $course
        ));
    }

    public function batdelstudentindexAction(Request $request,$courseId){
        ini_set('display_errors','off');
        $classr = array();
        $memberTypes = array();
        $con = mysqli_connect(System::$DBADDR,System::$DBUSER,System::$DBPASSWORD);
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }
        mysqli_select_db($con,System::$DBNAME);
        mysqli_query($con,"set names 'utf8'");
        $result = mysqli_query($con,"select id,title from classroom where status = 'published'");
        if(!is_null($result)){
            while($row = mysqli_fetch_array($result)){
                array_push($classr,$row);
            }
        }


        mysqli_select_db($con,System::$DBNAME);
        mysqli_query($con,"set names 'utf8'");
        $result = mysqli_query($con,"select distinct(varcharField3) memberTypeName  from user_profile");
        if(!is_null($result)){
            while($row = mysqli_fetch_array($result)){
                array_push($memberTypes,$row);
            }
        }

        mysqli_close($con);
        $course = array();
        $course['id'] = $courseId;

         $ip = System::$URL;

        $url = 'http://'.$ip.'/courseMg/delCourseMember?courseId='.$courseId;
        // $url = 'http://localhost:8080/statistics/getMemberScoreStatistics';
        $http = new HttpClient($url);
        error_log($url);
        $http->get();
        error_log("result===========".$http->getBody());
        $json = json_decode($http->getBody(),true);


        return $this->render('TopxiaWebBundle:MyCourse:batstudentcourse.htm.twig', array(
            'classr'     => $classr,
            'courseId'  =>$courseId,
            'memberTypes' => $memberTypes,
            'course'     => $course
        ));
    }

    public function batstudent1indexAction(Request $request,$courseId){
        $classr1 = array();
        $keshi = $request->query->get('keshi');
        $sskeshi = $request->query->get('sskeshi');
        $memberType = $request->query->get('memberType');
        $jobType = $request->query->get('jobType');
        $birthday = $request->query->get('birthday');
        $birthday_end = $request->query->get('birthday_end');
        $degree = $request->query->get('degree');
        $con = mysqli_connect(System::$DBADDR,System::$DBUSER,System::$DBPASSWORD);
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }

        $classr = array();
        $memberTypes = array();

        mysqli_select_db($con,System::$DBNAME);
        mysqli_query($con,"set names 'utf8'");
        $result = mysqli_query($con,"select id,title from classroom where status = 'published'");

        if(!is_null($result)){
            while($row = mysqli_fetch_array($result)){
                array_push($classr,$row);
            }
        }

        /*if(!is_null($result)){
            while($row = mysqli_fetch_array($result)){
                //array_push($classr,$row);
                $classr1[$row['id']] = $row['title'];
            }
        }*/

        /*if(!is_null($result)){
            while($row = mysqli_fetch_array($result)){
                array_push($classr,$row);
            }
        }*/

        mysqli_select_db($con,System::$DBNAME);
        mysqli_query($con,"set names 'utf8'");
        $result = mysqli_query($con,"select distinct(varcharField3) memberTypeName  from user_profile");
        if(!is_null($result)){
            while($row = mysqli_fetch_array($result)){
                array_push($memberTypes,$row);
            }
        }

        $users = array();
        $sql = "select u.id id,u.nickname nickname,p.weixin num,p.truename truename,p.company company  from user_profile p join user u on p.id = u.id where  
          u.id not in ( select userId from course_member where courseId = ".$courseId.") ";

        if(!empty($keshi)){
            $sql = $sql." and p.company = ".$keshi;
        }
        if(!empty($sskeshi)){
            $sql = $sql." and p.varcharField4 like '%".$sskeshi."%'";
        }
        if(!empty($memberType)){
            $sql = $sql." and p.varcharField3 = '".$memberType."'";
        }
        if(!empty($jobType)){
            $sql = $sql." and p.varcharField2 = '".$jobType."'";
        }
        if(!empty($birthday)){
            $sql = $sql." and p.varcharField1 > '".$birthday."'";
        }

        if(!empty($birthday)){
            $sql = $sql." and p.varcharField1 < '".$birthday_end."'";
        }

        if(!empty($degree)){
            $sql = $sql ." and p.varcharField5 = '".$degree."'";
        }
        $sql = $sql  ." order by p.company;";

        mysqli_select_db($con,System::$DBNAME);
        mysqli_query($con,"set names 'utf8'");
        $result = mysqli_query($con,$sql);
        if(!is_null($result)){
            while($row = mysqli_fetch_array($result)){
                array_push($users,$row);
            }
        }
        error_log($sql);
        mysqli_close($con);
        $course = array();
        $course['id'] = $courseId;
        return $this->render('TopxiaWebBundle:MyCourse:batstudentcourse1.htm.twig', array(
            'classr'     => $classr,
            'users'      => $users,
            'courseId'   =>$courseId,
            'course'     => $course,
            'keshi'      => $keshi,
            'sskeshi'      => $sskeshi,
            'memberType'      => $memberType,
            'memberTypes' => $memberTypes,
            'classr1'    => $classr1
        ));
    }

    public function batstudent2indexAction(Request $request,$courseId){
        $classr = array();
        $memberTypes = array();
        $uids = $request->query->get('uids');
        $keshi = $request->query->get('keshi1');
        $sskeshi = $request->query->get('sskeshi');
        error_log('uids:'.$uids);
        error_log('uids:'.$keshi);
        $ids = explode(',',$uids);
        $con = mysqli_connect(System::$DBADDR,System::$DBUSER,System::$DBPASSWORD);
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }

        mysqli_select_db($con,System::$DBNAME);
        mysqli_query($con,"set names 'utf8'");
        $result = mysqli_query($con,"select id,title from classroom where status = 'published'");
        if(!is_null($result)){
            while($row = mysqli_fetch_array($result)){
                array_push($classr,$row);
            }
        }

        $sql = "select * from course_expriy where courseId = '".$courseId."';";
        mysqli_select_db($con,System::$DBNAME);
        mysqli_query($con,"set names 'utf8'");
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        $expriy = empty($row['expiryTime']) ? 0 : $row['expiryTime'];

        foreach ($ids as $id) {
           $sql = "INSERT INTO `orders` (`sn`, `status`, `title`, `targetType`, `targetId`, `amount`, `totalPrice`, `isGift`, `giftTo`, `discountId`, `discount`, `token`, `refundId`, `userId`, `coupon`, `couponDiscount`, `payment`, `coinAmount`, `coinRate`, `priceType`, `bank`, `paidTime`, `cashSn`, `note`, `data`, `createdTime`) 
                   VALUES ('"."C".time()."', 'paid', '学习课程', 'course', '".$courseId."', '0.00', '0.00', '0', '', '0', '10.00', NULL, '0', '60', '', '0.00', 'none', '0.00', '1.00', 'RMB', '', '".time()."', NULL, '', NULL, '".time()."');
                  ";
           error_log($sql);
            mysqli_select_db($con,System::$DBNAME);
            mysqli_query($con,"set names 'utf8'");
            $result = mysqli_query($con,$sql);
           $sql = "select max(id) id from orders";
            mysqli_select_db($con,System::$DBNAME);
            mysqli_query($con,"set names 'utf8'");
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result);
           $orderId = $row['id'];

           $sql = "INSERT INTO `course_member` (`courseId`, `classroomId`, `joinedType`, `userId`, `orderId`, `deadline`, `levelId`, `learnedNum`, `credit`, `noteNum`, `noteLastUpdateTime`, `isLearned`, `seq`, `remark`, `isVisible`, `role`, `locked`, `deadlineNotified`, `createdTime`) 
                   VALUES ('".$courseId."', '0', 'course', '".$id."', '".$orderId."', '".$expriy."', '0', '0', '0', '0', '".time()."', '0', '0', '学习', '1', 'student', '0', '0', '".time()."');
                  ";
            mysqli_select_db($con,System::$DBNAME);
            mysqli_query($con,"set names 'utf8'");
            $result = mysqli_query($con,$sql);
        }

        mysqli_select_db($con,System::$DBNAME);
        mysqli_query($con,"set names 'utf8'");
        $result = mysqli_query($con,"select distinct(varcharField3) memberTypeName  from user_profile");
        if(!is_null($result)){
            while($row = mysqli_fetch_array($result)){
                array_push($memberTypes,$row);
            }
        }

        mysqli_close($con);
        $course = array();
        $course['id'] = $courseId;
        return $this->render('TopxiaWebBundle:MyCourse:batstudentcourse2.htm.twig', array(
            'classr'     => $classr,
            'courseId'  => $courseId,
            'course' => $course,
            'sskeshi' => $sskeshi,
            'keshi'      => $keshi
        ));
    }



}