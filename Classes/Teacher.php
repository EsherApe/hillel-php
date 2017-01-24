<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.12.2016
 * Time: 14:59
 */
class Teacher extends User
{
    public $subjectName;
    const ROLE = "teacher";

    /**
     * Teacher constructor.
     * @param $fullName
     * @param $phoneNumber
     * @param $email
     * @param $role
     * @param $subjectName
     */
    public function __construct($fullName, $phoneNumber, $email, $role, $subjectName)
    {
        parent::__construct($fullName, $phoneNumber, $email, $role);
        $this->subjectName = $subjectName;
    }

    /**
     * @return string
     */
    public function getVisitCard()
    {
        $visitCard = parent::getVisitCard() . "<br>";
        $visitCard .= "<b>" . "Subject: " . "</b>" . $this->subjectName . "<br>";
        return $visitCard;
    }
}