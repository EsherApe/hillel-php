<?php
require_once "Classes/PublicationWriter.php";
require_once "Classes/Publication.php";
require_once "Classes/Article.php";
require_once "Classes/News.php";
require_once "config.php";
?>

<!doctype html>
<html lang="en">
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
        <h1 class="main-title text-center">Publications</h1><br>
        <div class="col-sm-6 col-xs-12">
            <div class="jumbotron">
                <div class="container">
                    <?php foreach ($articles as $article): ?>
                        <article class="publication-item">
                            <h3 class="text-center"><?= $article['title'] ?> <br></h3>
                            <div class="publication-header clearfix">
                                <i>Article № <?= $article['id'] ?></i>
                                <i class="pull-right">Author: <?= $article['author'] ?></i>
                            </div>
                            <div class="text-center">
                                <?= $article['short_text'] ?><br>
                                <a href="article.php?&id=<?=$article['id']?>">читать полностью</a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="jumbotron">
                <div class="container">
                    <?php foreach ($news as $publication): ?>
                        <article class="publication-item">
                            <h3 class="text-center"><?= $publication['title'] ?> <br></h3>
                            <div class="publication-header clearfix">
                                <i>News № <?= $publication['id'] ?></i>
                                <i class="pull-right">Source:
                                    <a href="http://<?= $publication['source'] ?>"><?= $publication['source'] ?></a>
                                </i>
                            </div>
                            <div class="text-center">
                                <?= $publication['short_text'] ?><br>
                                <a href="news.php?id=<?=$publication['id']?>">читать полностью</a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
