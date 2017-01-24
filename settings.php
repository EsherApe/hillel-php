<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=university', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
    echo 'не удалось подключиться к БД';
    echo $e->getMessage();
    exit();
}