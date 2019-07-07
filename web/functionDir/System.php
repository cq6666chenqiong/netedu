<?php

/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/7/1
 * Time: 10:16
 */


define("DBADDR","localhost");
define("DBNAME","netedu");
define("DBUSER","root");
define("DBPASSWORD","123456");
define("__ROOT__",dirname(__FILE__));

 function getConnection(){
   $con = mysqli_connect(System::$DBADDR,System::$DBUSER,System::$DBPASSWORD);
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
        error_log(mysql_error());
    }

    return $con;
}

 function excuteSql($con,$sql){
    error_log($sql);
    mysqli_select_db($con,System::$DBNAME);
    mysqli_multi_query($con,"set names 'utf8'");
    $result = mysqli_query($con,$sql);
    return $result;
}

 function excuteMultiSql($con,$sql){
    error_log($sql);
    mysqli_select_db($con,System::$DBNAME);
    mysqli_multi_query($con,"set names 'utf8'");
    $result = mysqli_multi_query($con,$sql);
    return $result;
}

 function getOneResult($con,$sql){
    $result = System::excuteSql($con,$sql);
    if(!empty($result))
        return mysqli_fetch_array($result);
    else
        return null;
}

 function getManyResult($con,$sql){
    $result = System::excuteSql($con,$sql);
    $arry = array();
    if(!empty($result)){
        while ($row=mysqli_fetch_array($result)){
            array_push($arry,$row);
        }
    }
    return $arry;
}


 function closeConnection($con){
    mysqli_close($con);
}

 function getAgeByIDcard($id){

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
