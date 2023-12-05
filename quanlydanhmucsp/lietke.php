<p>Liệt kê danh mục sản phẩm</p>
<?php
$sql = "SELECT * from tbl_danhmuc order by thutu asc";
$row_lietkedanhmuc = mysqli_query($mysqli,$sql);
?>
<form action="./xuly.php" method="post">
  <table border = '1' width = '50%' style="border-collapse: collapse;">
    <tr>
        <td>Mã danh mục</td>
        <td>Tên danh mục</td>
        <td>Quản lý</td>
    </tr>
    <?php
    $i = 0;
    while($rows = mysqli_fetch_array($row_lietkedanhmuc)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $rows['tenDanhMuc'];?></td>
        <td>
            <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $rows['maDanhMuc'];?>">Xóa</a> 
            | 
            <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $rows['maDanhMuc'];?>">Sửa</a>
        </td>
    </tr>
    <?php
    }
    ?>
  </table>
</form>