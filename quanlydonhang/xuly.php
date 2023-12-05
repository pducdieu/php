<?php
include('../../config/config.php');
if(isset($_GET['code'])){
    $code_cart =$_GET['code'];
    $status =  $_GET['cart_status'];
    $sql = mysqli_query($mysqli,"UPDATE tbl_cart set cart_status=0 where code_cart = '".$code_cart."'");
    header('Location:../../index.php?action=quanlydonhang&query=lietke');
}
?>