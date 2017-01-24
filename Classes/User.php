<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.12.2016
 * Time: 14:45
 */
class User
{
    public $fullName;
    public $phoneNumber;
    public $email;
    public $role;

    /**
     * User constructor.
     * @param $fullName
     * @param $phoneNumber
     * @param $email
     * @param $role
     */
    public function __construct($fullName, $phoneNumber, $email, $role)
    {
        $this->fullName = $fullName;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getVisitCard()
    {
        $visitCard = "<b>" . "Name: " . "</b>" . $this->fullName . "<br>" .
                     "<b>" . "Phone: " . "</b>" . $this->phoneNumber . "<br>" .
                     "<b>" . "Email: " . "</b>" . $this->email . "<br>" .
                     "<b>" . "Role: " . "</b>" . $this->role;
        return $visitCard;
    }
}