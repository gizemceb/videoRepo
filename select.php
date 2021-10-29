<?php
$connect = mysqli_connect("localhost","videodba","1234567","videodb");
$output = '';
$sql = "SELECT * FROM video WHERE is_deleted = '0'";
$result = mysqli_query($connect,$sql);


if(mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_array($result)){
    $output .= '<div class="inserted">
          <div class="img"><a target="_blank" href="'.$row["link"].'">
  <img border="0" alt="" src="https://img.youtube.com/vi/%253cinsert-youtube-video-id-here%253e/default.jpg" width="100" height="100">
  </a></div>
          <div class="des" data-id1="'.$row["id"].'"> <div class="div_des"> '.$row["description"].' </div><br>
          <div class="div_date">Eklenme Tarihi: '.$row["date_added"].'</div></div>
          <div class="btns"><div class="div_guncelle"><button name="btn_guncelle" id="btn_guncelle" data-id3="'.$row["id"].'">Güncelle</button></div>
          &nbsp
          <div class="div_delete"><button name="btn_delete" id="btn_delete" data-id4="'.$row["id"].'"><i class="fa fa-times" aria-hidden="true"></i></button></div></div>


    </div>';
  }
}
echo $output;
?>
