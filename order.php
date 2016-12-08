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
                <nav class="navbar navbar-default">
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
                            <a class="navbar-brand" href="index.php">Phones</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Главная</a></li>
                                <li><a href="addProduct.php">Сотрудничество</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </header>
            <main class="main">
                <div class="thumbnail col-sm-6">
                    <?php $product = $db->getProductItem($_GET['order']); ?>
                    <img class="img-normal" src="img/phones/<?= $product['product_img_link'] ?>" alt="<?= $product['product_name'] ?>" style="width: auto;">
                    <div class="caption-full">
                        <h4 class="pull-right"><?= $product['product_price'] ?> UAH</h4>
                        <h4><a href="#"><?= $product['product_name'] ?></a></h4>

                        <p><?= $product['product_desc'] ?></p>
                    </div>
                </div>
                <div class="order-form center-block col-sm-6" style="max-width: 600px;">
                    <form action="" method="post" role="form">
                        <?php if ($_SESSION['error']): ?>
                            <div class="alert alert-danger">
                                <?= $_SESSION['error'];
                                unset($_SESSION['error']); ?>
                            </div>
                        <?php endif; ?>

                        <h2>Order form!</h2>

                        <div class="form-group">
                            <label for="userName">Enter your Name</label>
                            <input type="text" class="form-control" name="user_name" id="userName" placeholder="name" required>
                        </div>
                        <div class="form-group">
                            <label for="userPhone">Enter your phone number</label>
                            <input type="tel" class="form-control" name="user_phone" id="userPhone" placeholder="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="userEmail">Enter your Email</label>
                            <input type="email" class="form-control" name="user_email" id="userEmail" placeholder="email" required>
                        </div>
                        <div class="form-group">
                            <label for="productAmount">Amount of goods:</label>
                            <input type="number" class="form-control" name="product_amount" id="productAmount" placeholder="amount">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="product_id" id="productId" value="<?= $_GET['order'] ?>">
                        </div>

                        <button type="submit" class="btn btn-success center-block btn-block">order</button>
                    </form>
                </div>
            </main>
        </div>
        <footer class="footer">
            <div class="footer__copyright text-center">@2016 all rights reserved</div>
        </footer>
    </div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>