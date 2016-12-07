<?php
    require_once "settings.php";
    session_start();
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
                <div class="order-form center-block" style="max-width: 600px;">
                    <form action="" method="post" role="form">
                        <?php if ($_SESSION['error']): ?>
                            <div class="alert alert-danger">
                                <?= $_SESSION['error'];
                                unset($_SESSION['error']); ?>
                            </div>
                        <?php endif; ?>

                        <h2>Форма заказа номера</h2>

                        <div class="form-group">
                            <label for="userName"></label>
                            <input type="text" class="form-control" name="user_name" id="userName" placeholder="name" required>
                        </div>
                        <div class="form-group">
                            <label for="userSurname"></label>
                            <input type="text" class="form-control" name="user_surname" id="userSurname" placeholder="surname" required>
                        </div>
                        <div class="form-group">
                            <label for="userPhone"></label>
                            <input type="tel" class="form-control" name="user_phone" id="userPhone" placeholder="phone" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="room_id" id="roomId" value="<?= $_GET['order'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Заказать</button>
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