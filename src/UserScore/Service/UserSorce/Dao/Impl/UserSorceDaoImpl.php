<?php

/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/6/14
 * Time: 17:19
 */

namespace UserSorce\Service\UserSorce\Dao\Impl;

use Topxia\Service\Common\BaseDao;
use UserSorce\Service\UserSorce\Dao\UserSorceDao;

class UserSorceDaoImpl extends BaseDao implements UserSorceDao
{

    public function getUserSorce($id){
         $sql = "select * from user_sorce where id = ".$id;
         return $this->getConnection()->fetchAssoc($sql, array($id));
    }

    public function addUserSorce($fields){

    }

}