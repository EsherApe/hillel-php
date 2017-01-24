<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.12.2016
 * Time: 15:02
 */
class Admin extends User
{
    public $schedule;

    /**
     * Admin constructor.
     * @param $fullName
     * @param $phoneNumber
     * @param $email
     * @param $role
     * @param $schedule
     */
    public function __construct($fullName, $phoneNumber, $email, $role, $schedule)
    {
        parent::__construct($fullName, $phoneNumber, $email, $role);
        $this->schedule = $schedule;
    }

    /**
     * @return string
     */
    public function getVisitCard()
    {
        $visitCard = parent::getVisitCard() . "<br>";
        $visitCard .= "<b>" . "Schedule: " . "</b>" . $this->schedule . "<br>";
        return $visitCard;
    }
}