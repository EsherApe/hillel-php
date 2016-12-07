<?php

require_once "database.php";

$bestStudFinder = new BestStudentsFinder();
$bestStudFinder->selectBestStudents($students);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="jumbotron">
    <div class="container">
        <div class="thumbnail clearfix">
            <div class="col-xs-12">
                <table class="table table-bordered">
                    <legend style="padding-top: 10px;">Best students:</legend>
                    <thead>
                        <th>Student</th>
                        <th>Mark</th>
                    </thead>
                    <tbody>
                    <?php foreach ($bestStudFinder->bestStudents as $student): ?>
                        <tr>
                            <td><?= $student->studentName() ?></td>
                            <td><?= $student->averageMark ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
