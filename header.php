<?php
if(isset($_GET['action']) && $_GET['query'] == 'dangxuat'){
    unset($_SESSION['dangnhap']);
    header("Location:login.php");
}
?>
<p><a href="index.php?action&query=dangxuat">Đăng xuất:
        <?php
            if(isset($_SESSION['dangnhap'])){
                echo $_SESSION['dangnhap'];
            }
        ?>
    </a></p>