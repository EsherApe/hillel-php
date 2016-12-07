<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29.11.2016
 * Time: 12:35
 */

class BestStudentsFinder {
    public $bestStudents;

    /*show student if it has good marks and visits*/
    public function checkStudent(Student $student) {
        if($student->averageMark > 4 && $this->averageVisits($student) > 0.5) {
            echo $student->studentName(). " ".$student->averageMark."<br>";
        } else {
            echo "-". "<br>";
        }
    }

    /*calculate average number of visits*/
    public function averageVisits($student) {
        $amount = 0;
        $visitsAmount = 0;
        foreach ($student->visits as $visit => $value) {
            if($value) $visitsAmount++;
            $amount++;
        }
        return round($visitsAmount/$amount, 2);
    }

    /*build table with best students*/
    public function selectBestStudents($students) {
        foreach ($students as $student) {
            $newStudent = new Student($student['name'], $student['surname'], $student['visits'], $student['marks']);
            if($newStudent->averageMark > 4 && $this->averageVisits($newStudent) > 0.5) {
                $this->bestStudents[] = $newStudent;
            }
        }
    }

}