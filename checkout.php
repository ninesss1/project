<?php 
session_start();
include("shop_server.php");

$productIds = [];
foreach(($_SESSION['cart'] ?? []) as $cartId => $cartQty){
    $productIds[] = $cartId;
}

$ids = 0;

if(count($productIds) > 0){
    $ids = implode(', ', $productIds);
}

$query = mysqli_query($conn,"SELECT * FROM products WHERE id IN ($ids)");
$rows = mysqli_num_rows($query);

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Checkout example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/elegant-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slicknav.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css_my/stayhome.css">
    <link rel="stylesheet" href="asstes/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


   
<!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
  </head>
  
  
  <body class="bg-body-tertiary">
    <?php include 'menu.php'; ?>

    <div class="container mt-4">
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>

        <h4 class="mb-4">Checkout</h4>

        <form action="<?php echo $base_url; ?>/checkout-success.php" method="post">
            <div class="row g-4">
                <div class="col-md-6">
                    <label for="Fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="Fullname" name="Fullname" required>
                </div>

                <div class="col-md-6">
                    <label for="tel" class="form-label">Tel</label>
                    <input type="text" class="form-control" id="tel" name="tel" required>
                </div>

                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="col-md-6 mt-4">
                    <button type="submit" class="btn btn-primary btn-lg">Continue to Checkout</button>
                </div>


                <div class="col-md-6 mt-4 text-end">
                    <a href="<?php echo $base_url; ?>/product-list.php" class="btn btn-secondary btn-lg" name="back_to_products">Back to Products</a>
                </div>
            </div>
        </form>

        <div class="row mt-5">
            <div class="col-md-7">
                <h4 class="mb-3">Your Cart</h4>
                <?php if($rows > 0): ?>
                    <ul class="list-group">
                        <?php $grand_total = 0; ?>
                        <?php while($product = mysqli_fetch_assoc($query)): ?>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0"><?php echo $product['product_name'];?> (<?php echo $_SESSION['cart'][$product['id']]; ?>)</h6>
                                    <small class="text-secondary"><?php echo nl2br($product['detail']); ?></small>
                                    <input type="hidden" name="product[<?php echo $product['id']; ?>][price]" value="<?php echo $product['price']; ?>">
                                    <input type="hidden" name="product[<?php echo $product['id']; ?>][name]" value="<?php echo $product['product_name']; ?>"">
                                </div>
                                <span class="text-muted">$<?php echo $product['price']; ?></span>
                            </li>
                        <?php $grand_total += $_SESSION['cart'][$product['id']] * $product['price']; ?>
                        <?php endwhile; ?>
                        
                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <h6 class="my-0">Grand total</h6>
                                <small>amount</small>
                            </div>
                            <span class="text-succes"><strong>$<?php echo number_format($grand_total,2); ?></strong></span>
                        </li>
                    </ul>
                    <input type="hidden" name="grand_total" value="<?php echo $grand_total; ?>">
                <?php else: ?>
                    <p>Your cart is empty.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>


    

    <script src="checkout.js"></script></body>
</html>
