<?php
$connect = mysqli_connect("localhost","videodba","1234567","videodb");
$id = $_POST["id"];
$link = $_POST["link"];
$des = $_POST["description"];
$sql = " UPDATE video SET link = '$link', description= '$des' WHERE id = '$id'" ;

if(mysqli_query($connect, $sql)){
  echo 'Data updated';
}
 ?>
