<?php
  $connect=mysqli_connect("localhost","videodba","1234567","videodb") or die("connection Failed");
  if(!empty($_POST['save'])){

    $username=$_POST['un'];
    $password=$_POST['pw'];
    $query="select * from login where username='$username' and password='$password'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
      header('location: page2.php');
      //echo "<script>$('form').attr('action', 'page2.php');</script>";
      //echo "login Succesful";
    }
    else {
      $message = "error";
      echo "<script>alert('$message');</script>";
    }
  }
 ?>
<!--username: videodba
    password:1234567
    database: videodb -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="page1.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </head>
  <body>
    <div id="header">Video Admin</div>
    <div class="innerbody">
      <div class="fist">
        <h1>Giriş</h1>
      </div>

      <div class="second">
        <form id="form" class=""  method="post">
          Kullanıcı Adı<input type="text" name="un" >
          <br>
          Şifre<input class="input" type="text" name="pw" >
          <br>
          <input class="button" type="submit" name="save" value="Giriş yap">
        </form>
      </div>

    </div>

  </body>
</html>
