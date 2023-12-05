<p>Thêm bài viết</p>
<form action="modules/quanlybaiviet/xuly.php" method="post" enctype="multipart/form-data">
  <table border = '1' width = '50%' style="border-collapse: collapse;">
    <tr>
      <td>Tên bài viết: </td>
      <td><input type="text" size="50%" name="tenbaiviet" ></td>
    </tr>
    <tr>
      <td>Hình ảnh:</td>
      <td><input type="file" name="hinhanh" id="" ></td>
    </tr>
    <tr>
      <td>Nội dung:</td>
      <td><textarea name="noidung" rows="5" cols="50" style="resize: none;" ></textarea></td>
    </tr>
    <tr>
      <td>Tóm tắt: </td>
      <td><textarea name="tomtat" rows="5" cols="50" style="resize: none;" ></textarea></td>
    </tr>
    <tr>
      <td>Danh mục bài viết:</td>
      <td>
        <select name="danhmucbaiviet" style="width: 80%; height: 30px;">
          <?php
          $sql_danhmuc = "SELECT * from tbl_danhmucbaiviet order by id_baiviet desc";
          $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
          while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
          ?>
          <option value="<?php echo $row_danhmuc['id_baiviet']; ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']; ?></option>
          
          <?php
          }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Tác giả:</td>
      <td>
        <input type="text" name="tacgia" id="">
      </td>
    </tr>
    <tr>
      <td>Tình trạng:</td>
      <td>
        <input type="text" name="tinhtrang" id="">
      </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="thembaiviet" id="" value="Thêm bài viết"></td>
    </tr>
  
  </table>
</form>
