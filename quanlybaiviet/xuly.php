<?php

include("../../config/config.php");

$tenbaiviet = $_POST['tenbaiviet'];
$mota = $_POST['noidung'];
$madanhmuc = $_POST['danhmucbaiviet'];
$tacgia = $_POST['tacgia'];
$tomtat = $_POST['tomtat'];
$tinhtrang = $_POST['tinhtrang'];
//xu li hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;

if(isset($_POST['thembaiviet'])){
    //them
    $sql_them = "INSERT INTO tbl_baiviet(tenbaiviet,hinhanh,noidung,id_danhmuc,tacgia,tomtat,tinhtrang) 
    VALUE('".$tenbaiviet."','".$hinhanh."','".$mota."','".$madanhmuc."','".$tacgia."','".$tomtat."','".$tinhtrang."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header("Location:../../index.php?action=quanlybaiviet&query=them");
}
elseif(isset($_POST['suabaiviet'])){
    //sua
    if(!empty($_FILES['hinhanh']['name'])){
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        
        $sql_update = "UPDATE tbl_baiviet set tenbaiviet ='".$tenbaiviet."', hinhanh ='".$hinhanh."', 
        noidung ='".$mota."',tomtat ='".$tomtat."',tacgia ='".$tacgia."',id_danhmuc ='".$madanhmuc."' 
        where id = '$_GET[idbaiviet]' ";
        //xoa hinh ảnh cũ
        $sql = "SELECT * from tbl_baiviet where id = '$_GET[idbaiviet]' limit 1";
        $query_xoaAnh = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query_xoaAnh)){
            unlink('uploads/'.$row['hinhanh']);
        }
    }else{
        $sql_update = "UPDATE tbl_baiviet set tenbaiviet ='".$tenbaiviet."', 
        noidung ='".$mota."',tomtat ='".$tomtat."',tacgia ='".$tacgia."',id_danhmuc ='".$madanhmuc."'  
        where id = '$_GET[idbaiviet]'";
    }
    mysqli_query($mysqli,$sql_update);
    header("Location:../../index.php?action=quanlybaiviet&query=them");
}
else{
    $id = $_GET['idbaiviet'];
    $sql = "SELECT * from tbl_baiviet where id = '$id' limit 1";
    $query_xoaAnh = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query_xoaAnh)){
        unlink("./uploads/".$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_baiviet where id = '".$id."' ";
    mysqli_query($mysqli,$sql_xoa);
    header("Location:../../index.php?action=quanlybaiviet&query=them");
}
?>