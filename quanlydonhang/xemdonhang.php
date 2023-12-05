<p>xem đơn hàng</p>
<?php
$sql_lietkedh = "SELECT * from tbl_cart_details,tbl_sanpham where tbl_cart_details.id_sanpham = tbl_sanpham.id_sanpham
and tbl_cart_details.code_cart = '$_GET[code]' order by tbl_cart_details.id_cart_details desc";
$query_lietkedh = mysqli_query($mysqli,$sql_lietkedh);
?>
<form action="./xuly.php" method="post">
  <table border = '1' width = '100%' style="border-collapse: collapse;">
    <tr>
        <td>ID</td>
        <td>Mã đơn hàng</td>
        <td>Tên sản phẩm</td>
        <td>Số lượng</td>
        <td>Đơn giá</td>
        <td>Giá</td>
    </tr>
    <?php
    $i = 0;
    $tongtien = 0;
    while($rows = mysqli_fetch_array($query_lietkedh)){
        $i++;
        
        $tongtien +=$rows['giaTien'] * $rows['soluongmua'];
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $rows['code_cart'];?></td>
        <td><?php echo $rows['tenSP'];?></td>
        <td><?php echo $rows['soluongmua'];?></td>
        <td><?php echo number_format($rows['giaTien'],0,',','.').'vnd';?></td>
        <td><?php echo number_format($rows['giaTien'] * $rows['soluongmua'],0,',','.').'vnd';?></td>
        
    </tr>
    <?php
    }

    ?>
    <td colspan="4">
           <p>Tổng tiền:</p>
        </td>
        <td colspan="2">
           <p><?php echo number_format($tongtien,0,',','.');?></p>
        </td>
  </table>
</form>