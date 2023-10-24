<?php 
session_start();
include("shop_server.php");

if(!empty($_GET['id'])){
   unset($_SESSION['cart'][$_GET['id']]);
   $_SESSION['message'] = 'Cart Delete Success';
}
header("Location: " . $base_url . '/cart.php');
?>