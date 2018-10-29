<?php

/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/6/14
 * Time: 17:09
 */
namespace UserSorce\Service\impl;

use UserSorce\Service\UserSorceSerivc;
use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;
use Topxia\Service\Common\ServiceEvent;


class UserSorceServiceImpl extends BaseService implements UserSorceSerivce
{
    protected function getUserSorceDao(){
        return $this->createDao('UserSorce:UserSorce.UserSorceDao');
    }

    public function getUserSorce($id){
         return $this->getUserSorceDao()->getUserSorce($id);
    }

    public function addUserSorce($fields){

    }
}