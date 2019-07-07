<?php
require_once 'phpExcelReader/Excel/reader.php';
require_once 'System.php';
//批量上传成绩
$a = $_FILES["file"]["tmp_name"];
error_log($a);
//$b = "/var/file/".$_FILES["file"]["name"];
$b = "D:\\FK\\".$_FILES["file"]["name"];
error_log($b);
if(move_uploaded_file($a,$b)){
}else{
}
$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('UTF-8');
$data->read($b);
error_reporting(E_ALL ^ E_NOTICE);
$con = mysqli_connect(DBADDR,DBUSER,DBPASSWORD);
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
$sql = "";
for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
    $usernumber = $data->sheets[0]['cells'][$i][2];
    $sqlr = "select id from user where nickname = '".$usernumber."';";
    mysqli_select_db($con,DBNAME);
    mysqli_query($con,"set names 'utf8'");
    $resultr = mysqli_query($con,$sqlr);
    $userId = "";
    if(!is_null($resultr)){
        while($row = mysqli_fetch_array($resultr)){
            $userId = trim($row['id']);
        }
    }
    $courseName = $data->sheets[0]['cells'][$i][5];
    $score = $data->sheets[0]['cells'][$i][3];
    $year = $data->sheets[0]['cells'][$i][6];
    $remark = $data->sheets[0]['cells'][$i][4];
    $courseType = $data->sheets[0]['cells'][$i][7];

    if($courseType == "层级课程"){
        $courseType = 0;
    }else{
        $courseType = -1;
    }

    $sql = $sql."INSERT INTO `user_score` ( `userId`, `score`, `testId`, `courseId`, `createTime`, `year`, `courseName`, `remark`, `courseType`) 
    VALUES ( '".$userId."', '".$score."', NULL, -1, NULL, '".$year."', '".$courseName."', '".$remark."','".$courseType."')".";";
}

error_log($sql);

mysqli_select_db($con,DBNAME);
mysqli_multi_query($con,"set names 'utf8'");
$result = mysqli_multi_query($con,$sql);

echo json_encode(array(
    'code'=>1,
    'status'=>'success'
));
?>