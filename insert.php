<?php
$connect = mysqli_connect("localhost","videodba","1234567","videodb");
$sql = "INSERT INTO video(link, description) VALUES ('".$_POST["link"]."','".$_POST["description"]."')";

if(mysqli_query($connect, $sql)){
  echo 'Data Inserted';
}
 ?>
