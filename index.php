<?php include('shop_server.php'); ?>
<!DOCTYPE html>
<html lang="zxx">
<?php  
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = "You must log in First";
        header('Location: login.php'); // แก้ไขตรงนี้
        exit();
    }

    if(isset($_GET['logout'])){ // แก้ไขตรงนี้
        session_destroy();
        unset($_SESSION['username']);
        header("Location: login.php");
        exit();
    }
?>
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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.php"><img src="img/com/PCProRent.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="product-list.php"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="product-list.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="product-list.php">ภาษาไทย</a></li>
                    <li><a href="product-list.php">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="product-list.php"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">หน้าแรก</a></li>
                <li><a href="product-list.php">ร้านค้า</a></li>
                <li><a href="product-list.php">การสั่งซื้อ</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="homepageproduct.php">รายละเอียดสินค้า</a></li>
                        <li><a href="./shoping-cart.html">ตะกร้าสินค้า</a></li>
                        <li><a href="./checkout.html">การชำระเงิน</a></li>
                    </ul>
                </li>
                <li><a href="./contact.html">เกี่ยวกับเรา</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="product-list.php"><i class="fa fa-facebook"></i></a>
            <a href="product-list.php"><i class="fa fa-twitter"></i></a>
            <a href="product-list.php"><i class="fa fa-linkedin"></i></a>
            <a href="product-list.php"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>PCProRent@gmail.com</li>
                <li>PCProRent will be by your side.</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>PCProRent@gmail.com</li>
                                <li>PCProRent will be by your side.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="product-list.php"><i class="fa fa-facebook"></i></a>
                                <a href="product-list.php"><i class="fa fa-twitter"></i></a>
                                <a href="product-list.php"><i class="fa fa-linkedin"></i></a>
                                <a href="product-list.php"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="product-list.php">ไทย</a></li>
                                    <li><a href="product-list.php">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="register.php"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/com/PCProRent.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">หน้าแรก</a></li>
                            <li><a href="product-list.php">ร้านค้า</a></li>
                            <li><a href="product-list.php">การสั่งซื้อ</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="homepageproduct.php">รายละเอียดสินค้า</a></li>
                                    <li><a href="cart.php">ตะกร้าสินค้า</a></li>
                                    <li><a href="checkout.php">การชำระเงิน</a></li>
                                </ul>
                            </li>
                           
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="product-list.php"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="cart.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>ประเภทสินค้า</span>
                        </div>
                        <ul>
                            <li><a href="product-list.php">คอมพิวเตอร์/Labtop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="product-list.php">
                                <div class="hero__search__categories">
                                    สินค้าที่สนใจ
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="คุณต้องการสินค้าประเภทใด?">
                                <button type="submit" class="site-btn">ค้นหา</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>HELLO</h5>
                                <span>พนักงานช่วยเหลือ24ชั่วโมง</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/com/ปก1.png">
                        <div class="hero__text">
                            <span>PCProRent</span>
                            <h2>Computers<br />and laptops</h2><br>
                            <a href="product-list.php" class="primary-btn">คลิก</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/com/macpronew.jpg">
                            <h5><a href="product-list.php">Apple Macbook Pro</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/com/DellXPS.png">
                            <h5><a href="product-list.php">Dell XPS</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/com/Macair.png">
                            <h5><a href="product-list.php">Apple Macbook Air</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/com/comHP.png">
                            <h5><a href="product-list.php">HP</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/com/cas.png">
                            <h5><a href="product-list.php">COMPUTER CASE</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>ประเภทสินค้า</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">ทั้งหมด</li>
                            <li data-filter=".oranges">คอมพิวเตอร์</li>
                            <li data-filter=".fresh-meat">โน้ตบุ๊ค/Labtop</li>
                            <li data-filter=".vegetables">อุปกรณ์อื่นๆ</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/com/SMacBookair.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="product-list.php"><i class="fa fa-heart"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="product-list.php">MacBook Air<br>(M1, 2020)</a></h6>
                            <h5>800฿</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/com/DellInspiron.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="product-list.php"><i class="fa fa-heart"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="product-list.php">N/B Dell Inspiron (15.6)<br>Platinum Silver</a></h6>
                            <h5>500฿</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/com/Asus.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="product-list.php"><i class="fa fa-heart"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="product-list.php">ASUS Vivobook Pro 16X 3D OLED (K6604)</a></h6>
                            <h5>700฿</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/com/Asus14.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="product-list.php"><i class="fa fa-heart"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="product-list.php">ASUS Vivobook S 14 OLED<br>(K5404)</a></h6>
                            <h5>500฿</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/com/AsusFlip.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="product-list.php"><i class="fa fa-heart"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="product-list.php">Vivobook S 14 Flip OLED<br>(TP3402)</a></h6>
                            <h5>500฿</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/com/macpronew.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="product-list.php"><i class="fa fa-heart"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="product-list.php">MacBook Pro<br>(13 นิ้ว, M2, ปี 2022) </a></h6>
                            <h5>1,000฿</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/com/Azercom.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="product-list.php"><i class="fa fa-heart"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="product-list.php">All-in-One Aspire C24-420-R38G0T23Mi/T00B</a></h6>
                            <h5>300฿</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/com/Asercom24.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="product-list.php"><i class="fa fa-heart"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="product-list.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="product-list.php">All-in-One Aspire C24-1750-12616G0T23Mi/T003</a></h6>
                            <h5>500฿</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/com/โฆษณา1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>ยอดนิยม</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/macpronew.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>MacBook Pro</h6>
                                        <span>700฿</span>
                                    </div>
                                </a>
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/SMacBookair.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>MacBook Air</h6>
                                        <span>750฿</span>
                                    </div>
                                </a>
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/lenovo.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lenovo LOQ 15APH8</h6>
                                        <span>800฿</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/Azergame.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Acer Predator Helios Neo 16 </h6>
                                        <span>800฿</span>
                                    </div>
                                </a>
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/AsusA15.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Asus TUF Gaming A15 </h6>
                                        <span>700฿</span>
                                    </div>
                                </a>
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/Asuslogjpg.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Asus ROG Strix SCAR 17 </h6>
                                        <span>1000฿</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>โปรโมชั่น!</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/LenovoLegionjpg.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lenovo Legion 5i</h6>
                                        <span>300฿</span>
                                    </div>
                                </a>
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/MSI.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6> MSI Cyborg 15 A12</h6>
                                        <span>400฿</span>
                                    </div>
                                </a>
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/DELLMONITOR.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>DELL MONITOR UltraSharp U3223QE</h6>
                                        <span>500฿</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/jgcom.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6> LG MONITOR 32UN500</h6>
                                        <span>200฿</span>
                                    </div>
                                </a>
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/AceAspire.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Acer Aspire A315-43-R48D Silver</h6>
                                        <span>150฿</span>
                                    </div>
                                </a>
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/Dell Inspiron.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6> Dell Inspiron 5620 </h6>
                                        <span>200฿</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>แนะนำ</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/AsusA15.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Asus TUF Gaming A15</h6>
                                        <span>700฿</span>
                                    </div>
                                </a>
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/Azergame.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Acer Predator Helios Neo 16 </h6>
                                        <span>800฿</span>
                                    </div>
                                </a>
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/macpronew.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>MacBook Pro</h6>
                                        <span>700฿</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/lenovo.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lenovo LOQ 15APH8</h6>
                                        <span>800฿</span>
                                    </div>
                                </a>
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/Azergame.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Acer Predator Helios Neo 16 </h6>
                                        <span>800฿</span>
                                    </div>
                                </a>
                                <a href="product-list.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/com/DELLMONITOR.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>DELL MONITOR UltraSharp U3223QE</h6>
                                        <span>500฿</span>
                                    </div>
                                </a>
                           </section>
         <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/com/PCProRent.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Phone: +66 255970060</li>
                            <li>Email: PCProRent@gmail.com</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>ร่วมสนุกกับเรา!</h6>
                        <p>ส่งอีเมลของคุณเพื่อลุ้นรับของรางวัลฟรี...มาร่วมสนุกด้วยกัน</p>
                        <form action="product-list.php">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">ส่ง</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="product-list.php"><i class="fa fa-facebook"></i></a>
                            <a href="product-list.php"><i class="fa fa-instagram"></i></a>
                            <a href="product-list.php"><i class="fa fa-twitter"></i></a>
                            <a href="product-list.php"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            PCProRent&copy;<script>document.write(new Date().getFullYear());</script> เว็บไซต์เช่าสินค้า | ที่ย่อมเยาว์ที่สุด <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">PCProRent</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>