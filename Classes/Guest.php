<?php

require_once "ActiveUser.php";

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.12.2016
 * Time: 17:54
 */
abstract class Guest implements ActiveUser
{
    public static $status = "guest";
}