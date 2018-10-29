<?php

namespace Topxia;

/*
define("DBADDR","localhost");
define("DBNAME","edusoho");
define("DBUSER","root");
define("DBPASSWORD","");
*/
class System
{
    public static $DBADDR = 'localhost';
    public static $DBNAME = 'myBanana';
    public static $DBUSER = 'root';
    public static $DBPASSWORD = '';
    const VERSION = '1.0.1';//'6.17.13';
    const RELEASE_NOTES = "http://www.myBanana.com/intro/13";


    public static function getConnection(){
        $con = mysqli_connect(System::$DBADDR,System::$DBUSER,System::$DBPASSWORD);

        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
            error_log(mysql_error());
        }

        return $con;
    }

    public static function excuteSql($con,$sql){
        error_log($sql);
        mysqli_select_db($con,System::$DBNAME);
        mysqli_multi_query($con,"set names 'utf8'");
        $result = mysqli_query($con,$sql);
        return $result;
    }

    public static function excuteMultiSql($con,$sql){
        error_log($sql);
        mysqli_select_db($con,System::$DBNAME);
        mysqli_multi_query($con,"set names 'utf8'");
        $result = mysqli_multi_query($con,$sql);
        return $result;
    }

    public static function getOneResult($con,$sql){
        $result = System::excuteSql($con,$sql);
        if(!empty($result)){
            error_log("ttttttt");
            return mysqli_fetch_array($result);
        }
        else
            return null;
    }

    public static function getManyResult($con,$sql){
        $result = System::excuteSql($con,$sql);
        $arry = array();
        if(!empty($result)){
              while ($row=mysqli_fetch_array($result)){
                  array_push($arry,$row);
              }
        }
        return $arry;
    }


    public static function closeConnection($con){
        mysqli_close($con);
    }

    public static function getAgeByIDcard($id){

        //过了这年的生日才算多了1周岁
        if(empty($id)) return '';
        $date=strtotime(substr($id,6,8));
        //获得出生年月日的时间戳
        $today=strtotime('today');
        //获得今日的时间戳
        $diff=floor(($today-$date)/86400/365);
        //得到两个日期相差的大体年数

        //strtotime加上这个年数后得到那日的时间戳后与今日的时间戳相比
        $age=strtotime(substr($id,6,8).' +'.$diff.'years')>$today?($diff+1):$diff;

        return $age;
    }

}
