<?php 
session_start();
include("shop_server.php");
$query = mysqli_query($conn , "SELECT * FROM products");
$rows = mysqli_num_rows($query);

// var product form
$result = [
    'id' => '',
    'product_name' => '',
    'price' => '',
    'product_image' => '',
    'detail' => ''
];

// product selected edit
if(!empty($_GET["id"])){
    $query_product = mysqli_query($conn , "SELECT * FROM products WHERE id = '{$_GET["id"]}'");

    $row_product = mysqli_num_rows($query_product);

    if($row_product == 0){
        header("location: ". $base_url. '/homepageproduct.php');
        exit(); // เพิ่มบรรทัดนี้
    }
    $result = mysqli_fetch_assoc($query_product);
    
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
        <link rel="stylesheet" href="css/elegant-icons.css" type>
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css_my/stayhome.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="asstes/bootstrap.min.css" type="text/css">
    </head>
    <body class="bg-body-tertiary">
        <?php include('menu.php'); ?>
        <div class="container" style="margin:top 30px;">
            <h4>Home - Manage Product</h4>
            

            <?php if(isset($_SESSION['message'])): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['message'];?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>

            <div class="row g-5">
                <div class="col-md-8 col-sm-12">
                    <form action="product-from.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                            <div class="row g-3 mb-3">
                                <label class="form-lable">Product Name</label>
                                <input type="text" name="product_name" class="form-control" value="<?php echo $result['product_name']; ?>">
                            </div>
                            
                            <div class="col-sm-6">
                                <label class="form-lable">Price</label>
                                <input type="text" name="price" class="form-control" value="<?php echo $result['price']; ?>">
                            </div>
                            <br>
                            <div class="col-sm-6">
                                <?php if(!empty($result['profile_image'])): ?>
                                    <div>
                                        <img src="<?php echo $base_url; ?>/upload_image/<?php echo $result['profile_image']; ?>"  width="100" alt="Product Image">
                                    </div>
                                <?php endif; ?>
                                <label class="form-lable" for="formFile">Image</label>
                                <input type="file" name="profile_image" class="form-control" accept="image/png , image/jpg , image/jpeg">
                            </div>
                            <br>
                            <div class="col-sm-6">
                                <label class="form-lable">Detail</label>
                                <textarea class="form-control" name="detail" rows="3"><?php echo $result['detail']; ?></textarea>
                            </div>
                            
                            <br>
                            
                            <?php if(empty($result['id'])): ?>
                            <button class="btn btn-primary" type="submit">Create</button>
                            <?php else: ?>
                                <button class="btn btn-primary" type="submit">Update</button>
                            <?php endif;?>
                            
                            <a role="button" href="homepageproduct.php" class="btn btn-secondary">Cancel</a>
                            <hr class="my-4">
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered border-info">
                        <thead>
                            <tr>
                                <th style="width: 100px;">Image</th>
                                <th>Product Name</th>
                                <th style="width: 200px;">Price</th>
                                <th style="width: 200px;">Action</th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php if($rows > 0): ?>
                            <?php while($product = mysqli_fetch_assoc($query)):?>
                                <tr>
                                    <td>
                                        <?php if(!empty($product['profile_image'])): ?>
                                            <img src="<?php echo $base_url; ?>/upload_image/<?php echo $product['profile_image']; ?>"  width="100" alt="Product Image">
                                        <?php else:?>
                                            <img src="<?php echo $base_url; ?>/assets/images/no-image.png<?php echo $product['profile_image']; ?>"  width="100" alt="Product Image">
                                        <?php endif;?>       
                                    </td>
                                
                                    <td>
                                        <?php echo $product['product_name']; ?>
                                        <div>
                                            <small class="text-muted"></small><?php echo $product['detail']; ?></small>
                                        </div>
                                    </td>
                                    <td><?php echo number_format($product['price'],2); ?></td>
                                    <td>
                                        <a role="button" href="<?php echo $base_url; ?>/homepageproduct.php? id=<?php echo $product['id']; ?>" class="btn btn-outline-dark">Edit</a>
                                        <a onclick="return confirm('Are your want to delete ?');"  role="button" href="<?php echo $base_url; ?>/product-delete.php? id=<?php echo $product['id']; ?>" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile;?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center text-danger" style="text-align: center;">No Data Found</td>
                            </tr>
                        <?php endif;?>
                       </tbody>

                    </table>
                </div>
            </div>
        </div>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
