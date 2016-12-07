<?php

require_once "HotelsDb.php";
session_start();

/*create database*/
$db = new HotelsDb('hotels_db', 'root', '');

/*insert data to the hotels table in database*/
if (isset($_POST['hotel_name'])) {
    if ($db->addHotel($_POST['hotel_name'], $_POST['room_price'], $_POST['hotel_desc'])) {
        header("location: index.php");
    } else {
        $_SESSION['error'] = 'not add hotel';
    }
}

/*insert data to the orders table in database*/
if (isset($_POST['user_name'])) {
    if($db->orderRoom($_POST['user_name'], $_POST['user_surname'], $_POST['user_phone'], $_POST['room_id'])) {
        header("location: index.php");
    } else {
        $_SESSION['error'] = 'order failed!';
    }
}

/*remove hotel*/
if (isset($_GET['delete_hotel'])) {
    $res = $db->deleteHotel($_GET['hotel_id']);
}