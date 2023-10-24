<?php 
session_start();
include("shop_server.php");

foreach($_SESSION['cart'] as $productId => $productQty){
    $_SESSION['cart'][$productId] = $_POST['product'][$productId]['quantity'];
}

$_SESSION['message'] = 'Cart Updeat Success';
header("Location: " . $base_url . '/cart.php');
?>