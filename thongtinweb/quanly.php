<p>Quản lý thông tin liên hệ</p>
<?php
    $sql_lh = "SELECT * from tbl_lienhe where id=1";
    $row_lh = mysqli_query($mysqli,$sql_lh);
?>
<table border = '1' width = '50%' style="border-collapse: collapse;">
<?php
  while($dong = mysqli_fetch_array($row_lh)){
  ?>
<form action="modules/thongtinweb/xuly.php?id=<?php echo $dong['id'] ?>" method="post" enctype="multipart/form-data">
  
  
    <tr>
      <td>Thông tin liên hệ:</td>
      <td><textarea name="thongtinlienhe" id="" cols="30" rows="10"><?php echo $dong['thongtinlienhe'] ?></textarea></td>
    </tr>
   
    <tr>
      <td colspan="2"><input type="submit" name="submitlienhe" id="" value="Cập nhật"></td>
    </tr>
  <?php
  }
  ?>
  </form>
  </table>
