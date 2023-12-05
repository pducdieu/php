
<?php
include("../../config/config.php");
$tendanhmucbaiviet = $_POST['tendanhmucbaiviet'];
$thutu = $_POST['thutu'];
if(isset($_POST['themdanhmucbaiviet'])){
    //them
    $sql = "INSERT INTO tbl_danhmucbaiviet(tendanhmuc_baiviet,thutu) VALUE('".$tendanhmucbaiviet."','".$thutu."')";
    mysqli_query($mysqli,$sql);
    header("Location:../../index.php?action=quanlydanhmucbaiviet&query=them");
}
elseif(isset($_POST['suadanhmucbaiviet'])){
    //sua
    $sql_update = "UPDATE tbl_danhmucbaiviet set tendanhmuc_baiviet ='".$tendanhmucbaiviet."', thutu ='".$thutu."' where id_baivier = '$_GET[idbaiviet]'";
    mysqli_query($mysqli,$sql_update);
    header("Location:../../index.php?action=quanlydanhmucbaiviet&query=them");
}
else{
    $id = $_GET['idbaiviet'];
    $sql_xoa = "DELETE FROM tbl_danhmucbaiviet where id_baiviet = '".$id."' ";
    mysqli_query($mysqli,$sql_xoa);
    header("Location:../../index.php?action=quanlydanhmucbaiviet&query=them");
}


?>