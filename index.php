<?php

require_once "Classes/User.php";
require_once "Classes/Student.php";
require_once "Classes/Teacher.php";
require_once "Classes/Admin.php";
require_once "settings.php";

$student = User::getInstance("student", $pdo);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Task №11</title>
</head>
<body>
<div class="container" style="padding: 80px 0;">
    <div class="row">
        <div class="panel panel-success center-block" style="max-width: 300px;">
            <div class="panel-heading">
                <h3 class="panel-title"><em>Visit Card</em></h3>
            </div>
            <div class="panel-body">
                <?= $student->getVisitCard() ?>
            </div>
            <div class="panel-footer"><em>Status: <?= $student->getRole() ?></em></div>
        </div>
    </div>
</div>
</body>
</html>