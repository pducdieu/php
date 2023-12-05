<?php
    $sql_sua = "SELECT * from tbl_danhmucbaiviet where id_baiviet = '$_GET[idbaiviet]' limit 1";
    $row_suadanhmucbv = mysqli_query($mysqli,$sql_sua);
?>
<p>Sửa danh mục bài viết</p>
<form action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>" method="post">
  <table border = '1' width = '50%' style="border-collapse: collapse;">
  <?php
  while($dong = mysqli_fetch_array($row_suadanhmucbv)){
  ?>
    <tr>
      <td>Tên danh mục:</td>
      <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc_baiviet'] ?>" placeholder="Điền tên danh mục bài viết" ></td>
    </tr>
    <tr>
      <td>Thứ tự:</td>
      <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>" placeholder="Điền thứ tự"></td>
    </tr>

    <tr>
      <td colspan="2"><input type="submit" name="suadanhmucbaiviet" value="Sửa danh mục bài viết"></td>
    </tr>
  <?php
  }
  ?>
  </table>
</form>
