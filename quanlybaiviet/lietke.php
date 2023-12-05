<p>Liệt kê bài viết</p>
<?php
$sql_lietkebv = "SELECT * from tbl_baiviet,tbl_danhmucbaiviet where tbl_danhmucbaiviet.id_baiviet = tbl_baiviet.id_danhmuc 
order by tbl_baiviet.id desc";
$row_lietke = mysqli_query($mysqli,$sql_lietkebv);
?> 
<form action="./xuly.php" method="post">
  <table border = '1' width = '100%' style="border-collapse: collapse;">
    <tr>
        <td>ID</td>
        <td>Tên bài viết</td>
        <td>Hình ảnh</td>
        <td>Danh mục bài viết</td>
        <td>Tác giả</td>
        <td>Quản lý</td>
    </tr>
    <?php
    $i = 0;
    while($rows = mysqli_fetch_array($row_lietke)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $rows['tenbaiviet'];?></td>
        <td><img src="modules/quanlybaiviet/uploads/<?php echo $rows['hinhanh'];?>" alt="ảnh minh họa" width="100px"></td>
        <td><?php echo $rows['tendanhmuc_baiviet'];?></td>
        <td><?php echo $rows['tacgia'];?></td>
        <td>
            <a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $rows['id'];?>">Xóa</a> 
            | 
            <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $rows['id'];?>">Sửa</a>
        </td>
    </tr>
    <?php
    }
    ?>
  </table>
</form>