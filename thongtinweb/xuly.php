
<?php
include("../../config/config.php");
$id = $_GET['id'];
$thongtinlienhe = $_POST['thongtinlienhe'];

if(isset($_POST['submitlienhe'])){
    //sua
    $sql_update = "UPDATE tbl_lienhe set thongtinlienhe ='".$thongtinlienhe."' where id='".$id."' ";
    mysqli_query($mysqli,$sql_update);
    header("Location:../../index.php?action=quanlyweb&query=capnhat");
}


?>