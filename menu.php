<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<head class="d-flex justified-content-center py3 sticky-top bg-light border-bottom shadow-sm">

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="text-align: center;">
    <div class="container" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="product-list.php">Product List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="homepageproduct.php">Menager</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart <?php echo count($_SESSION['cart'] ?? []); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Sing up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Log out</a>
            </li>
        </ul>
    </div>
    <form class="d-flex" action="product-list.php" method="post">
        <input type="search" class="form-control me-2" placeholder="Search" id="searchInput" alert-label="Search" name="keyword">
        <button class="btn btn-outline-secondary" type="submit" id="searchButton">Search</button>
    </form>
                
            
    </div>
</nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>