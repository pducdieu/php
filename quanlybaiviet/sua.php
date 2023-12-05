<?php
    $sql_suabv = "SELECT * from tbl_baiviet
    where id = '$_GET[idbaiviet]' 
    limit 1";
    $row_suabaiviet = mysqli_query($mysqli,$sql_suabv);
?>
<p>Cập nhật bài viết</p>
<?php
while($row = mysqli_fetch_array($row_suabaiviet)){
?>
<form action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data">
  <table border = '1' width = '50%' style="border-collapse: collapse;">
    <tr>
      <td>Tên bài viết:</td>
      <td><input type="text" name="tenbaiviet" id="" value="<?php echo $row['tenbaiviet'] ?>"></td>
    </tr>
    <tr>
      <td>Hình ảnh:</td>
      <td>
        <input type="file" name="hinhanh" >
        <img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'];?>" alt="ảnh minh họa" width="100px">
      </td>
    </tr>
    <tr>
      <td>Tác giả: </td>
      <td><input type="text" name="tacgia" id="" value="<?php echo $row['tacgia'] ?>"></td>
    </tr>
    <tr>
      <td>Danh mục bài viết:</td>
      <td>
        <select name="danhmucbaiviet" style="width: 80%; height: 30px;">
          <?php
          $sql_danhmucbaiviet = "SELECT * from tbl_danhmucbaiviet order by id_baiviet desc";
          $query_danhmuc = mysqli_query($mysqli,$sql_danhmucbaiviet);
          while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            
            if($row_danhmuc['id_baiviet'] == $row['id_danhmuc']){
          ?>
          <option selected value="<?php echo $row_danhmuc['id_baiviet']; ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']; ?></option>
          
          <?php
            }
            else{
              ?>
            <option value="<?php echo $row_danhmuc['id_baiviet']; ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']; ?></option>
              <?php
            }
          }
          ?>
        </select>
      </td>
      </tr>
    <tr>
      <td>Nội dung:</td>
      <td><textarea name="noidung" rows="5" cols="50" style="resize: none;"><?php echo $row['noidung'] ?></textarea></td>
    </tr>
    <tr>
      <td>Tóm tắt:</td>
      <td><textarea name="tomtat" rows="5" cols="50" style="resize: none;"><?php echo $row['tomtat'] ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="suabaiviet" id="" value="Cập nhật"></td>
    </tr>
  
  </table>
</form>
<?php
}
?>