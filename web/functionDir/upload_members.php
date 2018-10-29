<?php
require_once 'phpExcelReader/Excel/reader.php';
require_once 'System.php';
//批量长传用户
$a = $_FILES["file"]["tmp_name"];
error_log($a);
$b = "/var/file/".$_FILES["file"]["name"];
//$b = "D:\\".$_FILES["file"]["name"];
error_log($b);
if(move_uploaded_file($a,$b)){

}else{

}

// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();

$data->setOutputEncoding('UTF-8');

$data->read($b);

error_reporting(E_ALL ^ E_NOTICE);



/*
$con = mysqli_connect("localhost","root",NULL);
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
*/
error_log("2");

$sql = "";
$con = mysqli_connect(DBADDR,DBUSER,DBPASSWORD);
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysqli_select_db($con,DBNAME);
mysqli_query($con,"set names 'utf8'");
$result = mysqli_query($con,"select id,title from classroom where status = 'published'");
$keshi = array();
if(!is_null($result)){
    while($row = mysqli_fetch_array($result)){
        //array_push($classr,$row);
        $key = trim($row['title']);
        $value = trim($row['id']);
        $keshi[$key] = $value;
    }
}

for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
    $arry = array();
    for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
        $value = $data->sheets[0]['cells'][$i][$j];
        array_push($arry,$value);

    }
    /*
    $sql = "INSERT INTO `user` ( `email`, `verifiedMobile`, `password`, `salt`, `payPassword`, 
`payPasswordSalt`, `uri`, `nickname`, `title`, `tags`, `type`, `point`, `coin`, `smallAvatar`, `mediumAvatar`, `largeAvatar`, 
`emailVerified`, `setup`, `roles`, `promoted`, `promotedSeq`, `promotedTime`, `locked`, `lockDeadline`,
 `consecutivePasswordErrorTimes`, `lastPasswordFailTime`, `loginTime`, `loginIp`, `loginSessionId`, `approvalTime`, 
 `approvalStatus`, `newMessageNum`, `newNotificationNum`, `createdIp`, `createdTime`, `updatedTime`, `inviteCode`, `orgId`, `orgCode`) 
VALUES ( '".$arry[2]."', '', 'TD0T0O925x6QH8vcHgr95+Z3O0QQxgFZ0Se1VyIVz5o=', '9izqrds5uxwk8swgsoco8wk8wgosc8g', '', '', '', '".$arry[1]."', '".$arry[8]."', '', 'default', '0', '0', '', '', '', '0', '1', '|ROLE_USER|', '0', '0', '0', '0', '0', '0', '0', '1496821330', '::1', '', '0', 'unapprove', '0', '0', '::1', '".time()."', '".time()."', NULL, '1', '1.');
;";
    */

    /**新
     * arry[0] 工号
     * arry[1] 姓名
     * arry[2] 性别
     * arry[3] 出生日期
     * arry[4] 职称
     * arry[5] 职称分类
     * arry[6] 人员类别
     * arry[7] 所属科室
     * arry[8]  科室分类
     * arry[9] 身份证号
     * arry[10] 最高学历
     * arry[11] 最高学位
     */

    /*旧
     *
     */

    $sql = "INSERT INTO `user` ( `email`, `verifiedMobile`, `password`, `salt`, `payPassword`, 
`payPasswordSalt`, `uri`, `nickname`, `title`, `tags`, `type`, `point`, `coin`, `smallAvatar`, `mediumAvatar`, `largeAvatar`, 
`emailVerified`, `setup`, `roles`, `promoted`, `promotedSeq`, `promotedTime`, `locked`, `lockDeadline`,
 `consecutivePasswordErrorTimes`, `lastPasswordFailTime`, `loginTime`, `loginIp`, `loginSessionId`, `approvalTime`, 
 `approvalStatus`, `newMessageNum`, `newNotificationNum`, `createdIp`, `createdTime`, `updatedTime`, `inviteCode`, `orgId`, `orgCode`) 
VALUES ( '".$arry[0]."@hospital.com"."', '', 'TD0T0O925x6QH8vcHgr95+Z3O0QQxgFZ0Se1VyIVz5o=', '9izqrds5uxwk8swgsoco8wk8wgosc8g', '', '', '', '".$arry[0]."', '1', '', 'default', '0', '0', '', '', '', '0', '1', '|ROLE_USER|', '0', '0', '0', '0', '0', '0', '0', '1496821330', '::1', '', '0', 'unapprove', '0', '0', '::1', '".time()."', '".time()."', NULL, '1', '1.');
;";
    error_log($sql);
    mysqli_select_db($con,DBNAME);
    mysqli_query($con,"set names 'utf8'");
    $result = mysqli_query($con,$sql);

    $sql = "select max(id) id from user";

    //error_log($sql);
    mysqli_select_db($con,DBNAME);
    mysqli_query($con,"set names 'utf8'");
    $result1 = mysqli_query($con,$sql);
    $r = mysqli_fetch_array($result1);

    $id = $r['id'];
    $gender = "";
        if(trim($arry[2])=="男"){
            $gender = "male";
        }else if(trim($arry[2])=="女"){
            $gender = "female";
        }else{
            $gender = "secret";
        }
        /*
        $sql = "INSERT INTO `user_profile` (`id`, `truename`, `idcard`, `gender`, `iam`, `birthday`, `city`, `mobile`, `qq`, `signature`, `about`, `company`, `job`, `school`, `class`, `weibo`, `weixin`, `isQQPublic`, `isWeixinPublic`, `isWeiboPublic`, `site`, `intField1`, `intField2`, `intField3`, `intField4`, `intField5`, `dateField1`, `dateField2`, `dateField3`, `dateField4`, `dateField5`, `floatField1`, `floatField2`, `floatField3`, `floatField4`, `floatField5`, `varcharField1`, `varcharField2`, `varcharField3`, `varcharField4`, `varcharField5`, `varcharField6`, `varcharField7`, `varcharField8`, `varcharField9`, `varcharField10`, `textField1`, `textField2`, `textField3`, `textField4`, `textField5`, `textField6`, `textField7`, `textField8`, `textField9`, `textField10`)
                                               VALUES ('".$id."', '".$arry[1]."', '".$arry[9]."', '".$gender."', '', NULL, '', '"."保密"."', '', '"."保密"."', '', '".$keshi[trim($arry[7])]."', '".$arry[4]."', '".$arry[10]."', '', '','1', '"."1"."', '0', '0', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '".$arry[5]."', '".$arry[6]."', '".$arry[8]."', '".$arry[10]."', '".$arry[3]."' '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');";

        */
        //'".$arry[5]."', '".$arry[6]."', '".$arry[8]."', '".$arry[10]."', '".$arry[3]."'
    $sql = "INSERT INTO `user_profile` (`id`, `truename`, `idcard`, `gender`, `iam`, `birthday`, `city`, `mobile`, `qq`, `signature`, `about`, `company`, `job`, `school`, `class`, `weibo`, `weixin`, `isQQPublic`, `isWeixinPublic`, `isWeiboPublic`, `site`,  `varcharField1`, `varcharField2`, `varcharField3`, `varcharField4`, `varcharField5`, `varcharField6`, `varcharField7`, `varcharField8`, `varcharField9`, `varcharField10`, `textField1`, `textField2`, `textField3`, `textField4`, `textField5`, `textField6`, `textField7`, `textField8`, `textField9`, `textField10`)
                                               VALUES ('".$id."', '".$arry[1]."', '".$arry[9]."', '".$gender."', '', NULL, '', '"."保密"."', '', '"."保密"."', '', '".$keshi[trim($arry[8])]."', '".$arry[4]."', '".$arry[10]."', '', '','1', '"."1"."', '0', '0', '0', '".$arry[3]."', '".$arry[5]."', '".$arry[6]."', '".$arry[7]."', '".$arry[11]."', '".$arry[10]."' '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');";
    error_log($sql);
        mysqli_select_db($con,DBNAME);
        mysqli_query($con,"set names 'utf8'");
        $result2 = mysqli_query($con,$sql);

}

$con->close();
error_log("cheng gong");
echo json_encode(array(
    'code'=>1,
    'status'=>'success'
));



?>
