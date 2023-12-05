<?php
$sql = "SELECT * from tbl_danhmucbaiviet order by thutu asc";
$row_lietkedanhmucbv = mysqli_query($mysqli,$sql);
?>

<p>Liệt kê danh mục bài viết</p>
<form action="./xuly.php" method="post">
  <table border = '1' width = '50%' style="border-collapse: collapse;">
    <tr>
        <td>ID</td>
        <td>Tên danh mục</td>
        <td>Quản lý</td>
    </tr>
    <?php
    $i = 0;
    while($rows = mysqli_fetch_array($row_lietkedanhmucbv)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $rows['tendanhmuc_baiviet'];?></td>
        <td>
            <a href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $rows['id_baiviet'];?>">Xóa</a> 
            | 
            <a href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $rows['id_baiviet'];?>">Sửa</a>
        </td>
    </tr>
    <?php
    }
    ?>
  </table>
</form>                                                                                     