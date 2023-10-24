<?php
session_start();
include("shop_server.php");

$product_name = trim($_POST['product_name']);
$price = $_POST['price'] ?: 0 ;
$detail = trim($_POST['detail']);
$imag_name = $_FILES['profile_image']['name'];

$image_tmp = $_FILES['profile_image']['tmp_name'];
$folder = 'upload_image/';
$image_location = $folder . $imag_name;

if(empty($_POST['id'])){
    $query = mysqli_query($conn , "INSERT INTO products(product_name, price, profile_image, detail) VALUES ('$product_name', '$price', '$imag_name', '$detail')") or die('Could not insert'); 
}else{
    $query_product = mysqli_query($conn , "SELECT * FROM products WHERE id = '{$_POST["id"]}'");
    $result = mysqli_fetch_assoc($query_product);
    
    if(empty($imag_name)){
        $imag_name = $result['profile_image'];
    }else{
        @unlink($folder . $result['profile_image']);
    }

    $query = mysqli_query($conn, "UPDATE products SET product_name = '{$product_name}', price = '{$price}', profile_image = '{$imag_name}', detail = '{$detail}' WHERE id = '{$_POST['id']}'") or die('Could not update');
}
mysqli_close($conn);

if($query){
    move_uploaded_file($image_tmp, $image_location);
    $_SESSION['message'] = "Product Added Successfully";
    header("location: " . $base_url . '/homepageproduct.php');
}else{
    $_SESSION['message'] = "Product Not Added";
    header("location: ". $base_url. '/homepageproduct.php');
}
?>
