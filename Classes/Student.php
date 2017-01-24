<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.12.2016
 * Time: 14:52
 */
class Student extends User
{
    public $averageScore;
    public $visits;

    /**
     * Student constructor.
     * @param $fullName
     * @param $phoneNumber
     * @param $email
     * @param $role
     * @param $averageScore
     * @param $visits
     */
    public function __construct($fullName, $phoneNumber, $email, $role, $averageScore, $visits)
    {
        parent::__construct($fullName, $phoneNumber, $email, $role);
        $this->averageScore = $averageScore;
        $this->visits = $visits;
    }

    /**
     * @return string
     */
    public function getVisitCard()
    {
        $visitCard = parent::getVisitCard() . "<br>";
        $visitCard .= "<b>" . "Score: " . "</b>" . $this->averageScore . "<br>" .
                      "<b>" . "Visits: " . "</b>" . $this->visits;
        return $visitCard;
    }
}