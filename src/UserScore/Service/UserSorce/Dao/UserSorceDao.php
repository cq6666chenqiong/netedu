<?php

/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/6/14
 * Time: 17:19
 */
namespace UserSorce\Service\UserSorce\Dao;

interface UserSorceDao
{
    public function getUserSorce($id);

    public function addUserSorce($fields);
}