<?php

namespace Custom\WebBundle\Controller;

use Topxia\Common\Paginator;
use Topxia\Common\ArrayToolkit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Topxia\WebBundle\Controller\BaseController;
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/6/7
 * Time: 20:02
 */
class BatDepartmentController  extends BaseController
{
      public function indexAction(Request $request)
      {
          $name  = $request->query->get('name');
          error_log('cccc'.$name);
          error_log(print_r($request));
          $a = $_FILES["file"]["tmp_name"];
          error_log($a);
          $b = "D:\\test\\".$_FILES["file"]["name"];
          error_log($b);
          if(move_uploaded_file($a,$b)){

          }else{

          }

          echo json_encode(array(
              'a'=>1,
              'b'=>2
          ));
      }

}