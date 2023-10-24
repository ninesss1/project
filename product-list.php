<?php 
    session_start();
    include("shop_server.php");

    // ดึงข้อมูลสินค้าทั้งหมด
    $query = mysqli_query($conn , "SELECT * FROM products");
    $rows = mysqli_num_rows($query);

    $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : "";

    if($keyword != ""){
        $sql = "SELECT * FROM products WHERE id = '$keyword' or product_name LIKE '%$keyword%' ORDER BY product_name"; 
    } else {
        $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 10";
    }    
?>    

<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PCProRent</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css_my/stayhome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="asstes/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <script>
        $(document).ready(function(){
            $("#searchButton").click(function(){
                var searchTerm = $("#searchInput").val();
                window.location.href = "<?php echo $base_url; ?>/product-list.php?search=" + searchTerm;
            });
        });
    </script>
</head>
<body class="bg-body-tertiary">
    <?php include('menu.php'); ?>
    
    <div class="container" style="margin-top: 30px;">
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['message'];?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>

        <h4>Product</h4>
    
        <div class="row d-flex justify-content-center">
            <?php if($rows > 0): ?>
                <?php while($product = mysqli_fetch_assoc($query)) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="card">
                            <?php if(!empty($product['profile_image'])): ?>
                                <div class="card-img-top" style="height: 200px; overflow: hidden;">
                                    <img src="<?php echo $base_url; ?>/upload_image/<?php echo $product['profile_image']; ?>" class="w-100" alt="Product Image">
                                </div>
                            <?php else:?>
                                <div class="card-img-top" style="height: 200px; overflow: hidden;">
                                    <img src="<?php echo $base_url; ?>/assets/images/no-image.png" class="w-100" alt="Product Image">
                                </div>
                            <?php endif;?>       
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['product_name']; ?></h5>
                                <p class="card-text text-success fw-bold mb-0"><?php echo number_format($product['price'], 2); ?> Bath</p>
                                <p class="card-text" style="font-size: 14px;" text-muted><?php echo nl2br($product['detail']); ?></p>
                                <a href="<?php echo $base_url; ?>/cart-add.php?id=<?php echo $product['id']; ?>" class="btn btn-primary w-100"><i class="bi bi-bag-check me-3"></i>Add to Cart</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php else:?>
                <div class="col-12">
                    <h4 class="text-danger">No Product Found</h4>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="col-12">
            <h4 class="text-danger">No Product See you Later</h4>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
