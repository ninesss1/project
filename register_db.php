<?php
session_start();
$errors = array();
include('server.php');


if(isset($_POST['reg_user'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $First_name = mysqli_real_escape_string($conn,$_POST['First_name']);
    $Last_name = mysqli_real_escape_string($conn,$_POST['Last_name']);
    $password_1 = mysqli_real_escape_string($conn,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn,$_POST['password_2']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);

    // ตรวจสอบข้อมูลที่กรอก
    if(empty($username)){
        array_push($errors , "Username is required");
    }
    if(empty($First_name)){
        array_push($errors , "First_name is required");
    }
    if(empty($Last_name)){
        array_push($errors , "Last_name is required");
    }
    if(empty($password_1) || empty($password_2)){
        array_push($errors , "Both passwords are required");
    }
    if($password_1 != $password_2){
        array_push($errors, "The two passwords do not match");
    }
    if(empty($email)){
        array_push($errors , "Email is required");
    }

    // ตรวจสอบฐานข้อมูล
    $user_check_query = "SELECT * FROM user WHERE email = '$email' OR username = '$username'";
    $query = mysqli_query($conn,$user_check_query);
    $result = mysqli_fetch_assoc($query);

    if($result){
        if($result['username'] === $username){
            array_push($errors, "Username already exists");
        }
        if($result['email'] == $email){
            array_push($errors, "E-mail already exists");
        }
    }

    // หากไม่มีข้อผิดพลาดใดๆ ในขั้นตอนก่อนหน้า จะทำการเพิ่มผู้ใช้
    if(count($errors) == 0){
        $password_hashed = md5($password_1); // เข้ารหัสรหัสผ่าน
        $sql = "INSERT INTO user (username , first_name , last_name , password , email) VALUES ('$username' , '$First_name' , '$Last_name' , '$password_hashed' , '$email')";
        mysqli_query($conn , $sql);
    
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now registered and logged in";
        header("location: index_1.php"); // ทำการ redirect ไปยังหน้าหลักหลังจากลงทะเบียนสำเร็จ
    }else {
        array_push($errors, "Wrong username/password combination");
        $_SESSION['error'] = "Wrong username/password combination";
        header('location: register.php');
    }
}
?>
