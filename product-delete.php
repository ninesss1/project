<?php 
session_start();
include("shop_server.php");

if(!empty($_GET["id"])){
    $query_product = mysqli_query($conn,"SELECT * FROM products WHERE id = '{$_GET["id"]}'");
    $result = mysqli_fetch_assoc($query_product);
    @unlink('upload_image/' . $result['profile_image']);

    $query = mysqli_query($conn, "DELETE FROM products WHERE id = '{$_GET["id"]}'") or die('Could not delete');
    mysqli_close($conn);

    if($query){
        $_SESSION['message'] = 'Product deleted successfully';
        header("location: ". $base_url. '/homepageproduct.php');
    }else{
        $_SESSION['message'] = 'Product not deleted';
        header("location: ". $base_url. '/homepageproduct.php');
    }
}
?>