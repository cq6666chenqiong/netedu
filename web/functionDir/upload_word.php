<?php
require_once 'phpExcelReader/Excel/reader.php';
require_once 'System.php';

	$a = $_FILES["file"]["tmp_name"];
    error_log($a);
	$b = "/var/file/".$_FILES["file"]["name"];
	error_log($b);
	if(move_uploaded_file($a,$b)){
		
	}else{
		
	}

    error_log("success upload");
        echo json_encode(array(
            'path' => $b
        ));


/*
 * select u.nickname,
(select count(1) from testpaper_result t where t.userId = u.id
and t.passedStatus not in ('none','unpassed') ) xuefen,
(select count(1) from testpaper_result f where f.userId = u.id
and f.passedStatus in ('none','unpassed')
) guake
from user u LEFT JOIN user_profile p on u.id = p.id
 */
?>
