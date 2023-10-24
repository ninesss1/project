<?php 
    session_start();
    include('server.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css_my/stay.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    </head>
    <body>
        <form action="register_db.php" method='post'>
            <?php include('error.php'); ?>
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3>
                        <?php echo $_SESSION['error']; 
                        unset($_SESSION['error']); 
                        ?>
                    </h3>
                </div> <?php endif; ?>
            <div class="head">
                <h1>Create Account</h1>
                <p>Already have an Account? <a href="Login.php">Sing in</a></p>
            </div>
            <div class="from-group">
                <input type="text" placeholder="Username" name="username"> 
                <div class="bio">
                    <input type="text" placeholder="First_name" name="First_name">
                    <input type="text" placeholder="Last_name" name="Last_name">
                </div>
                <input type="password"  placeholder="Password" name="password_1" id="password_1"  required>
                <br>
                <input type="password"  placeholder="Comfirm Password" name="password_2" id="password_2"  required>
                <br>
                <input type="email" id="" placeholder="E-mail" name="email">
                <button type="submit" name="reg_user">
                    <div></div>
                    Submit
                    <i class="bi bi-arrow-right"></i>
                </button>
                <div class="check"> 
                    <input type="checkbox" id="terms" required>
                    <p>I have read and Agree to the <a href="#">Term of Service</a></p>
                </div>
            </div>
        </form>
    
        
        <script src="" async defer></script>
    </body>
</html>