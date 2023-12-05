<?php
$mysqli = new mysqli("localhost","root","12345678","bancaycanh");

// Check connection
if ($mysqli->connect_errno) {
  echo "Lỗi kết nối đến cơ sở dữ liệu".$mysqli->connect_error;
  exit();
}
?>