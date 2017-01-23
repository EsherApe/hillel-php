<?php
require_once "Classes/PublicationWriter.php";
require_once "config.php";

$index = $_GET['id'];

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <title>Home work 14</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main-contaner clearfix">
    <div class="col-xs-12">
        <h1 class="main-title text-center"></h1><br>

        <article class="publication-item">
            <h3 class="text-center"><?= $news[$index]['title'] ?> <br></h3>
            <div class="publication-header clearfix">
                <i>News № <?= $news[$index]['id'] ?></i>
                <i class="pull-right">Source:
                    <a href="http://<?= $news[$index]['source'] ?>"><?= $news[$index]['source'] ?></a>
                </i>
            </div>
            <div class="text-center">
                <?= $news[$index]['long_text'] ?><br>
            </div>
            <h4 class="text-center"><a href="index.php">Main page</a></h4>
        </article>


    </div>
</div>
</body>
</html>
