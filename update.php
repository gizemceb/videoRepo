<?php
$connect = mysqli_connect("localhost","videodba","1234567","videodb");
$id = $_POST["id"];
$sql = " UPDATE video SET is_deleted = '1' WHERE id='$id'";

if(mysqli_query($connect, $sql)){
  echo 'Data deleted';
}
 ?>
