<?php include('server.php'); ?>
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
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="css_my/main.css">
    <script src='main.js'></script>
</head>
<body>
    <div class="header">
        <h2>WELCOM TO PC PRORENT</h2>
    </div>

    <div class="content">
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="success">
                    <h3>
                        <?php echo $_SESSION['success']; 
                        unset($_SESSION['success']); 
                        ?>
                    </h3>
                </div> <?php endif; ?>


    <?php  if(isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p><a href="index_1.php?logout='1'" style="color:red;">Logout</a></p>
        <a href="index.php">Go To Website</a>
    <?php endif ?>
</div>



</body>
</html>