<?php
    require_once "settings.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
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
                            <li><a href="cooperation.php">Сотрудничество</a></li>
                            <li><a href="ordersList.php">Заказы</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <main class="main">
            <h1 class="text-center">Гостиницы</h1>
            <div class="row">
                <?php foreach ($db->getHotels() as $hotel): ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="http://lorempixel.com/300/200/nightlife/<?= $hotel['id'] ?>"
                                     alt="<?= $hotel['hotel_name'] ?>" class="img-responsive"
                                     style="width: 100%;">
                            </a>

                            <div class="caption">
                                <h3><strong><?= $hotel['hotel_name'] ?></strong></h3>

                                <p>
                                    средняя стоимость номера - <strong><?= $hotel['room_price'] ?></strong>
                                    <small> грн/ночь.</small>
                                </p>
                                <p><b>Описание:</b> <?= $hotel['hotel_desc'] ?></p><br>

                                <div class="clearfix">
                                    <a href="order.php?order=<?= $hotel['id'] ?>" class="btn btn-success pull-left"
                                       role="button">Заказать номер</a>
                                    <a href="?delete_hotel&hotel_id=<?= $hotel['id'] ?>"
                                       class="btn btn-danger pull-right"
                                       role="button">Удалить</a>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
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