<?php

require_once "Student.php";
require_once "BestStudentsFinder.php";

$students = array(
    array(
        "name" => "John",
        "surname" => "Malkovich",
        "visits" => ["09.11" => false, "13.11" => true, "16.11" => true,  "20.11" => true],
        "marks" => [4,5,4,5],
    ),
    array(
        "name" => "Goran",
        "surname" => "Bregovic",
        "visits" => ["09.11" => false, "13.11" => false, "16.11" => false,  "20.11" => true],
        "marks" => [3,3,3,4],
    ),
    array(
        "name" => "Milla",
        "surname" => "Jovovich",
        "visits" => ["09.11" => true, "13.11" => true, "16.11" => true,  "20.11" => true],
        "marks" => [4,5,5,5],
    ),
    array(
        "name" => "Pierce",
        "surname" => "Brosnan",
        "visits" => ["09.11" => true, "13.11" => true, "16.11" => false,  "20.11" => true],
        "marks" => [4,5,4,5],
    ),
    array(
        "name" => "Tom",
        "surname" => "Hardy",
        "visits" => ["09.11" => false, "13.11" => true, "16.11" => true,  "20.11" => true],
        "marks" => [3,4,4,5],
    ),
);