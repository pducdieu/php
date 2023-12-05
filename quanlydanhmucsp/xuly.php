
<?php
include("../../config/config.php");
$tendanhmuc = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    //them
    $sql = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('".$tendanhmuc."','".$thutu."')";
    mysqli_query($mysqli,$sql);
    header("Location:../../index.php?action=quanlydanhmucsanpham&query=them");
}
elseif(isset($_POST['suadanhmuc'])){
    //sua
    $sql_update = "UPDATE tbl_danhmuc set tenDanhMuc ='".$tendanhmuc."', thutu ='".$thutu."' where maDanhMuc = '$_GET[iddanhmuc]'";
    mysqli_query($mysqli,$sql_update);
    header("Location:../../index.php?action=quanlydanhmucsanpham&query=them");
}
else{
    $id = $_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM tbl_danhmuc where maDanhMuc = '".$id."' ";
    mysqli_query($mysqli,$sql_xoa);
    header("Location:../../index.php?action=quanlydanhmucsanpham&query=them");
}
?>