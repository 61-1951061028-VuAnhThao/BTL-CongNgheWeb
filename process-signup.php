<?php
    //coi vấn đề đó không tồn tại ở đây
    if(!isset($_POST['btnSignUp'])){
        if(isset($_POST['email']) && $_POST['email'] !=''){
            include "send_mail.php";
            if(sendEmailForAccountActive($_POST['email'])){
                echo 'Đăng kí tài khoản thành công';
            }else{
                echo 'Đăng kí tài khoản không thành công';
            }
        }
        header("location:signup.php");
    }

    // Tôi coi một dữ liệu là hợp lệ
    $user = $_POST['txtUser'];
    $email = $_POST['txtEmail'];
    $pass1 = $_POST['txtPass1'];
    $pass2 = $_POST['txtPass2'];

    // Mục tiêu: CHÈN BẢN GHI ĐĂNG KÍ TÀI KHOẢN vào CSDL nhưng PHẢI KIỂM TRA NÓ ĐÃ TỒN TẠI không đã
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','db_congngheweb');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // $email = htmlspecialchars($email)
    //header ("location: login.php?error=?email")
    // Bước 02: Thực hiện truy vấn
    $sql01 = "SELECT * FROM db_nguoidung WHERE email = '$email' OR tendangnhap='$user'";
    // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
    // Nghiêm trọng: lỗi SQL Injection

    $result = mysqli_query($conn, $sql01);
    if(mysqli_num_rows($result)>0){
        $error = "Username or email is existed";
        header("location: signup.php?error=$error");//chuyển hướng hiển thị thông báo lỗi
    }else{
        $pass_md5 = md5($pass1);
        $pass_hash = password_hash($pass1,  PASSWORD_DEFAULT);
        $sql02="INSERT INTO db_nguoidung (tendangnhap, email, matkhau) VALUES('$user', '$email', '$pass_hash')";
        $result02 = mysqli_query($conn, $sql02);

        if($result02 == true){
            header("location: login.php");
        }else{
            $error = "Can not insert record. Please check ...";
            header("location: signup.php?error=$error");//chuyển hướng hiển thị thông báo lỗi
        }
    }
    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>