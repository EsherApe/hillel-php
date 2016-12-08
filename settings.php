<?php

require_once "InternetStoreDb.php";
session_start();

/*create database*/
$db = new InternetStoreDb('store_db', 'root', '');

/*insert data to the Phones table in database*/
if (isset($_POST['product_name'])) {
    if ($db->addProduct($_POST['product_name'], $_POST['product_price'], $_POST['product_desc'], $_POST['product_img_link'])) {
        header("location: index.php");
    } else {
        $_SESSION['error'] = 'not add hotel';
    }
}

/*insert data to the orders table in database*/
if (isset($_POST['user_name'])) {
    if($db->orderProduct($_POST['user_name'], $_POST['user_phone'], $_POST['user_email'], $_POST['product_id'], $_POST['product_amount'])) {
        header("location: orderSuccess.php");
    } else {
        $_SESSION['error'] = 'order failed!';
    }
}

/*insert data to the reviews table in database*/
if (isset($_POST['review_text'])) {
    if($db->addReview($_POST['review_user_name'], $_POST['review_text'], $_POST['product_id'])) {
    } else {
        $_SESSION['error'] = 'sending review failed!';
    }
}

/*remove hotel*/
if (isset($_GET['delete_product'])) {
    $res = $db->deleteProduct($_GET['product_id']);
}