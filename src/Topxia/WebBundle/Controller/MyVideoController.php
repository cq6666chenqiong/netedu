<?php
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/6/26
 * Time: 20:45
 */

namespace Topxia\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Topxia\Common\Paginator;
use Topxia\Common\ArrayToolkit;

class MyVideoController  extends BaseController
{

    public function indexAction(Request $request){
        error_log("aaaaaaaaaaaaaa");
        return $this->render('TopxiaWebBundle:Course:video.html.twig', array(
            'url' => 'http://vjs.zencdn.net/v/oceans.mp4'
        ));
    }
}