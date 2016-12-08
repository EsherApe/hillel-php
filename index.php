<?php
    require_once "settings.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStore</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
                            <li><a href="addProduct.php">Add product</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <main class="main">
            <h1 class="text-center">Smartphones</h1>
            <hr>
            <div class="row">
                <?php foreach ($db->getProducts() as $product): ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="productView.php?productId=<?= $product['id'] ?>">
                                <img src="img/Phones/<?= $product['product_img_link'] ?>"
                                     alt="<?= $product['product_name'] ?>" class="img-responsive"
                                     style="max-height: 300px; width: auto;">
                            </a>
                            <div class="caption">
                                <h3><strong><?= $product['product_name'] ?></strong></h3>
                                <p>
                                    price: <strong><?= $product['product_price'] ?></strong>
                                    <small> uah.</small>
                                </p>
                                <div class="clearfix">
                                    <a href="order.php?order=<?= $product['id'] ?>" class="btn btn-success pull-left"
                                       role="button">Buy it quick</a>
                                    <a href="?delete_product&product_id=<?= $product['id'] ?>"
                                       class="btn btn-danger pull-right"
                                       role="button">Remove</a>
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
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>