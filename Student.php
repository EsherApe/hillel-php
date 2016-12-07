<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29.11.2016
 * Time: 11:54
 */
class Student {

    public $name;
    public $surname;
    public $visits;
    public $marks;
    public $averageMark;

    public function __construct($name, $surname, $visits, $marks) {
        $this->name = $name;
        $this->surname = $surname;
        $this->visits = $visits;
        $this->marks = $marks;
        $this->averageMark = $this->calcAverageMark($marks);
    }

    private function calcAverageMark($marks) {
        return round(array_sum($marks) / count($marks), 1);
    }

    public function studentName() {
        return $this->name. " ".$this->surname;
    }

}