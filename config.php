<?php

try {
    $pdo = new PDO('mysql:dbname=news_blog;host=localhost', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    $pdo = null;
}

//$news = News::create(1, $pdo);

$articles = new PublicationWriter('article');
$articles = $articles->getShortPreview($pdo);

$news = new PublicationWriter('news');
$news = $news->getShortPreview($pdo);