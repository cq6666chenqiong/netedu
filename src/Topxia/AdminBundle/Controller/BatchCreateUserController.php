<?php
namespace Topxia\AdminBundle\Controller;
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2020/2/23
 * Time: 14:16
 */



use Topxia\Common\Paginator;
use Topxia\Common\ArrayToolkit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Topxia\System;
use Topxia\AdminBundle\Controller\httpclient;


class BatchCreateUserController extends BaseController
{

    public function indexAction(Request $request){

        $conditions = $request->query->all();

        error_log("批量生成用户");

        return $this->render('TopxiaAdminBundle:BatchCreateUser:index.html.twig', array(

        ));
    }
}