<?php

require_once "settings.php";

$lastViewed = $_COOKIE['lastViewed'];
/*if cookie is set - decode it from string to array*/
if (strlen($lastViewed) > 0) {
    $lastViewed = json_decode($lastViewed);
} else {
    $lastViewed = [];
}

/*if element not in array save it*/
if (!in_array((int)$_GET['productId'], $lastViewed)) {
    $lastViewed[] = (int)$_GET['productId'];
}

/*remove first element of array because we save only last 4 viewed items*/
if (count($lastViewed) > 4) {
    array_shift($lastViewed);
}

/*set cookie, encode array to json*/
setcookie('lastViewed', json_encode($lastViewed));

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
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
                                <li><a href="index.php">main</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </header>
            <main class="main">
                <?php $product = $db->getProductItem($_GET['productId']); ?>
                <h1 class="text-center"><?= $product['product_name'] ?></h1>
                <div class="thumbnail">
                    <img class="img-normal" src="img/phones/<?= $product['product_img_link'] ?>" alt="<?= $product['product_name'] ?>">
                    <div class="caption-full">
                        <h4 class="pull-right"><?= $product['product_price'] ?> UAH</h4>
                        <h4><a href="#"><?= $product['product_name'] ?></a></h4>

                        <p><?= $product['product_desc'] ?></p>
                    </div>
                    <div class="ratings">
                        <?php $reviews = $db->getReviews($_GET['productId'])?>
                        <p class="pull-right"><?= count($reviews); ?> reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class="well">
                    <div class="text-right">
                        <a href="order.php?order=<?=$_GET['productId']?>" class="btn btn-success"
                           role="button">Buy it!</a>
                        <a href="productView.php?productId=<?=$_GET['productId']?>&liveReview=1" class="btn btn-info">Leave a Review</a>
                    </div>
                    <?php if(($_GET['liveReview']) == 1): ?>
                        <form action="productView.php?productId=<?=$_GET['productId']?>&liveReview=0" method="POST">
                        	<legend>Live review!</legend>

                        	<div class="form-group">
                        		<label for="userName">Enter your name</label>
                        		<input type="text" class="form-control" name="review_user_name" id="userName">
                        	</div>
                            <div class="form-group">
                                <label for="reviewText">Live your review</label>
                                <textarea name="review_text" id="reviewText" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <input type="hidden" name="product_id" value="<?=$_GET['productId']?>">

                        	<button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    <?php endif; ?>
                    <hr>

                    <?php foreach ($reviews as $review): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <?= $review['review_user_name'] ?>
                            <span class="pull-right" style="color: #D17581"><?= date('d F Y', strtotime($review['review_date'])) ?></span>
                            <p><?= $review['review_text'] ?></p>
                        </div>
                    </div>

                    <hr>
                    <?php endforeach; ?>

                </div>

                <?php if($_COOKIE['lastViewed']): ?>
                <div class="viewed-products">
                    <div class="col-xs-12">
                        <div class="row">
                            <h2>Recently viewed</h2><hr>
                            <div class="row">
                                <?php for($i = 0; $i < count($lastViewed); $i++): ?>
                                <div class="col-sm-6 col-md-3">
                                    <div class="thumbnail">
                                        <?php $product = $db->getProductItem($lastViewed[$i]); ?>
                                        <a href="productView.php?productId=<?= $product['id'] ?>">
                                            <img class="img-normal" src="img/phones/<?= $product['product_img_link'] ?>" alt="<?= $product['product_name'] ?>">
                                            <div class="caption-full">
                                                <h4 class="pull-right"><?= $product['product_price'] ?> UAH</h4>
                                                <h4><a href="#"><?= $product['product_name'] ?></a></h4>
                                            </div>
                                        </a>
                                        <div class="ratings">
                                            <?php $reviews = $db->getReviews($product['id'])?>
                                            <p class="pull-right"><?= count($reviews); ?> reviews</p>
                                            <p>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                                4.0 stars
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </main>
        </div>
        <footer class="footer">
            <div class="footer__copyright text-center">@2016 all rights reserved</div>
        </footer>
    </div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
