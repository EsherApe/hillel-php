<?php

/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 20.12.2016
 * Time: 22:27
 */
class UserGreater
{
    protected $user;

    public function getUserInfo(ActiveUser $user)
    {
        echo $user->getFullName() . "<br>" . $user->getStatus();
    }
}