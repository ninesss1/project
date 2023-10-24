<?php 
session_start();
include("shop_server.php");

$now = date('Y-m-d H:i:s');
$query = mysqli_query($conn, "INSERT INTO orders (order_date, full_name, email, grand_total, tel) VALUES ('$now', '{$_POST['Fullname']}', '{$_POST['email']}', '{$_POST['grand_total']}', '{$_POST['tel']}')") or die('Failed to insert');

if ($query) {
    $last_id = mysqli_insert_id($conn);
    foreach ($_SESSION['cart'] as $productId => $productQty) {
        $product_name = $_POST['product'][$productId]['name'];
        $price = $_POST['product'][$productId]['price'];
        $total = $price * $productQty;
        mysqli_query($conn, "INSERT INTO order_details (order_id, product_id, product_name, price, quantity, total) VALUES ('{$last_id}', '{$productId}', '{$product_name}', '{$price}', '{$productQty}', '{$total}')") or die('Failed to insert'); // แก้ไขตรงนี้ จาก oder_details เป็น order_details
    }

    unset($_SESSION['cart']);
    $_SESSION['message'] = 'Checkout Order Success';
    header("Location: " . $base_url . '/checkout-success.php');
} else {
    $_SESSION['message'] = 'Checkout Order Failed';
    header("Location: " . $base_url . '/checkout-success.php'); // ตรวจสอบ URL นี้ว่าถูกต้องหรือไม่
}
?>
