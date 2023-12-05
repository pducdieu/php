<p>Liệt kê danh đơn hàng</p>
<?php
$sql_lietkedh = "SELECT * from tbl_cart,tbl_dangky where tbl_cart.id_khachhang = tbl_dangky.id_dangky order by tbl_cart.id_cart desc";
$query_lietkedh = mysqli_query($mysqli,$sql_lietkedh);
?>
<form action="./xuly.php" method="post">
  <table border = '1' width = '50%' style="border-collapse: collapse;">
    <tr>
        <td>ID</td>
        <td>Mã đơn hàng</td>
        <td>Tên khách hàng</td>
        <td>Địa chỉ</td>
        <td>Email</td>
        <td>Số điện thoại</td>
        <td>Tình trạng</td>
        <td>Quản lý</td>
    </tr>
    <?php
    $i = 0;
    while($rows = mysqli_fetch_array($query_lietkedh)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $rows['code_cart'];?></td>
        <td><?php echo $rows['tenkhachhang'];?></td>
        <td><?php echo $rows['diachi'];?></td>
        <td><?php echo $rows['email'];?></td>
        <td><?php echo $rows['sdt'];?></td>
        <td>
          
          <?php
          if($rows['cart_status']==1){
            echo '<a href="modules/quanlydonhang/xuly.php?cart_status=0&code='.$rows['code_cart'].'">Đơn hàng mới</a>';
          }else{
            echo "Đã xem";
          }
          ?>
        </td>
        <td>
            <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $rows['code_cart'];?>">Xem đơn hàng</a>
        </td>
    </tr>
    <?php
    }
    ?>
  </table>
</form>