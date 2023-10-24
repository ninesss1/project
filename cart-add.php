<?php 
session_start();
include("shop_server.php");

if(!empty($_GET['id'])){
    if(empty($_SESSION['cart'][$_GET['id']])){
        $_SESSION['cart'][$_GET['id']] = 1;
    }else{
        $_SESSION['cart'][$_GET['id']] += 1;
    }
    $_SESSION['message'] = 'Cart Add Success';
    
}
header("Location: " . $base_url . '/product-list.php');
