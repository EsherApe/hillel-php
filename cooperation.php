<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
                            <li><a href="ordersList.php">Заказы</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <main class="main p-t-50">
            <div class="form-container">
                <form action="index.php" method="POST" class="form" name="addHotelForm">
                    <?php if ($_SESSION['error']): ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['error'];
                            unset($_SESSION['error']); ?>
                        </div>
                    <?php endif; ?>
                    <h2>Добавьте свою гостиницу!</h2>
                    <div class="form-group">
                        <label for="hotel_name">Название гостиницы:</label>
                        <input type="text" class="form-control" id="hotel_name" name="hotel_name" required>
                    </div>
                    <div class="form-group">
                        <label for="room_price">Цена за номер:</label>

                        <div class="input-group">
                            <input type="text" class="form-control" name="room_price" required>
                            <span class="input-group-addon">UAH</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hotel_desc">Краткое описание:</label>
                        <textarea name="hotel_desc" id="hotel_desc" class="form-control" cols="30" rows="10"
                                  required></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Отправить</button>
                </form>
            </div>
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