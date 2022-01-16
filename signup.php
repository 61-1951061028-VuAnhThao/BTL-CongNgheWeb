<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif
        }

        body {
            background: #ecf0f3
        }

        .wrapper {
            max-width: 350px;
            min-height: 500px;
            margin: 80px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ecf0f3;
            border-radius: 15px;
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff
        }

        .logo {
            width: 80px;
            margin: auto
        }

        .logo img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
        }

        .wrapper .name {
            font-weight: 600;
            font-size: 1.4rem;
            letter-spacing: 1.3px;
            padding-left: 10px;
            color: #555
        }

        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 1.2rem;
            color: #666;
            padding: 10px 15px 10px 10px
        }

        .wrapper .form-field {
            padding-left: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
        }

        .wrapper .form-field .fas {
            color: #555
        }

        .wrapper .btn {
            box-shadow: none;
            width: 100%;
            height: 40px;
            background-color: red;
            color: #fff;
            border-radius: 25px;
            box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
            letter-spacing: 1.3px
        }

        .wrapper .btn:hover {
            background-color: red;
        }

        .wrapper a {
            text-decoration: none;
            font-size: 0.8rem;
            color: red;
        }

        .wrapper a:hover {
            color: #039BE5
        }

        @media(max-width: 380px) {
            .wrapper {
                margin: 30px 20px;
                padding: 40px 15px 15px 15px
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="logo"> <img
                src="https://www.freepnglogos.com/uploads/youtube-logo-png-images-0.png" alt="">
        </div>
        <div class="text-center mt-4 mb-4 name"> YouTube </div> 
        <form class="p-3 mt-3" action="process-signup.php" method = "post">
            <div class="form-field d-flex align-items-center"> 
                <span class="far fa-user"></span> <input type="text" name="txtUser" id="txtUser" placeholder="Username" require autofocus> 
            </div>
            <div class="form-field d-flex align-items-center"> 
                <span class="far fa-user"></span> <input type="email" name="txtEmail" id="Email" placeholder="Email" require autofocus> 
            </div>
            <div class="form-field d-flex align-items-center"> 
                <span class="fas fa-key"></span> <input type="password"name="txtPass1" id="Password" placeholder="Password" require> 
            </div> 
            <div class="form-field d-flex align-items-center"> 
                <span class="fas fa-key"></span> <input type="password"name="txtPass2" id="Password" placeholder="Retype Password" require> 
            </div> 
            <button class="btn mt-3" name="btnSignUp">Sign Up</button>
        </form>
        <?php
            if(isset($_GET['error'])){
                echo "<h5 style = 'color:red'>{$_GET['error']}</h5>";
            }
        ?>
        <div class="text-center fs-9"> <a href="login.php">If you have an account Log in</a> </div>
    </div>
</body>

</html>