<?php
require_once "settings.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container wrapper">
    <div class="content">
        <header class="header">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Hotels</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="cooperation.php">Сотрудничество</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <main class="main p-t-50">
            <h2 class="text-center">Заказы</h2>
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Имя, фамилия</th>
                    <th>Номер телефона</th>
                    <th>Гостиница</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($db->getOrders() as $order): ?>
                    <tr>
                        <td><?= $order['user_surname'] . ", " . $order['user_name'] ?></td>
                        <td><?= $order['user_phone'] ?></td>
                        <td><?= $order['hotel_name'] ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </main>
    </div>
    <footer class="footer">
        <div class="footer__copyright text-center">@2016 all rights reserved</div>
    </footer>
</div>
<!-- Latest compiled and minified JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
