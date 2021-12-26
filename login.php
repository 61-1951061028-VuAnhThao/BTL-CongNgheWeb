<?php
    session_start();

    if(isset($_SESSION['email'])){
        header('location:admin.php')
    }

    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == 'admin@gmail.com'  && $password == '123456'){
            $_SESSION['email'] = $email;
            header('location:admin.php');
        }
        else{
            echo "tài khoản hoặc mật khẩu sai";
        }
    }
?>

<form action="login.php" method="post">
    <label>Email</label>
    <input type="text" name="email">
    <label>Password</label>
    <input type="Password" name="password">
    <button type="submit" name="dangnhap">Đăng nhập</button>
</form>