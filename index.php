<?php
require_once 'autoload.php';

use Food\Cookie as Cookie;
use Food\Candy as Candy;

$cookie = new Cookie('Chocolate cookie', '60uah');
$cookie2 = new Cookie('Milk cookie', '60uah');
$candy = new Candy('Chupa Chups', '15uah');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <br><br>
        <div class="col-xs-6 col-xs-offset-3">
            <div class="jumbotron">
            	<div class="container">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Products</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?= $cookie ?></td>
                        </tr>
                        <tr>
                            <td><?= $candy ?></td>
                        </tr>
                        </tbody>
                    </table>
            	</div>
            </div>
        </div>
    </div>
</body>
</html>
