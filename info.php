<?php
$connect = mysqli_connect("localhost","videodba","1234567","videodb");


$id = $_POST["id"];
$sql = "SELECT * FROM video WHERE id='$id'";



$result = mysqli_query($connect,$sql);


?>
