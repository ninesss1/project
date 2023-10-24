<?php include('server.php'); ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css_my/stay2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <form action="login_db.php" method='post'>
    <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3>
                        <?php echo $_SESSION['error']; 
                        unset($_SESSION['error']); 
                        ?>
                    </h3>
                </div> <?php endif; ?>
        <div class="head">
            <h1>Login</h1>
            <p>You're not signed up? <a href="Register.php">Register</a></p>
        </div>
        <div class="from-group">
            <input type="text" placeholder="Username" name="username"> <br>
            <input type="password" placeholder="Password" name="password_1"> <br>
            <button type="submit" name="login_user">
                <div></div>
                Submit
                <i class="bi bi-arrow-right"></i>
            </button>
            <div class="check"> 
                <input type="checkbox" id="" required>
                <p>I have read and Agree to the <a href="#">Term of Service</a></p>
            </div>
        </div>
    </form>
    <script src="" async defer></script>


</body>
</html>