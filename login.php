<?php
 session_start();
 include('config/config.php');
 if(isset($_POST['dangnhap'])){
    $taikhoan = $_POST['username'];
    $matkhau = ($_POST['password']);
    $sql = "SELECT * from tbl_admin where username = '".$taikhoan."' AND password = '".$matkhau."' LIMIT 1 ";
    $query = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($query);
    if($count> 0){
        $_SESSION['dangnhap'] = $taikhoan;
        header('Location:index.php');
    }
    else{
        echo '<script>alert("Sai tài khoản hoặc mật khẩu")</script>';
        header('Location:login.php');
    }
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;1,100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="container_form">
            <div class="form-wrapper right-panel-active">
                <div class="overlay-form">
                    <button onclick="changeOverlay()" class="button-submit-overlay mt-1 mb-3">Sign In</button>
                    
                </div>
                <form class="form_sign-in" method="POST">
                    <h4>Sign In</h4>
                    <a>Đăng nhập tài khoản Admin</a>
                    <input class="input-email mb-3" type="text" name="username" placeholder="Username">
                    <input class="input-password mb-3" type="password" name="password" placeholder="Password">
                    <input type="submit" class="button-submit mt-1 mb-3" name="dangnhap" value="Đăng nhập">
                </form>  
                <form class="form_sign-up">
                <div class="input-password mb-3" >
                    <p style="color:#87CEFA; font-size: 50px">Chào mừng bạn đến trang quản lý bán cây cảnh</p>
                </div>
                </form>  
            </div>
        </div>
    </div>
    <script src="./index.js"></script>

</body>

</html>