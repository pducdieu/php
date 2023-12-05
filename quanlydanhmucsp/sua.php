<?php
    $sql_sua = "SELECT * from tbl_danhmuc where maDanhMuc = '$_GET[iddanhmuc]' limit 1";
    $row_suadanhmuc = mysqli_query($mysqli,$sql_sua);
?>
<p>Sửa danh mục sản phẩm</p>
<form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="post">
  <table border = '1' width = '50%' style="border-collapse: collapse;">
  <?php
  while($dong = mysqli_fetch_array($row_suadanhmuc)){
  ?>
    <tr>
      <td>Tên danh mục:</td>
      <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tenDanhMuc'] ?>" placeholder="Điền tên danh mục" ></td>
    </tr>
    <tr>
      <td>Thứ tự:</td>
      <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>" placeholder="Điền thứ tự"></td>
    </tr>

    <tr>
      <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
    </tr>
  <?php
  }
  ?>
  </table>
</form>
