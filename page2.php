
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Liste</title>
    <link rel="stylesheet" href="page2.css?v=<?php echo time(); ?>">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </head>
  <body>
    <div class="header">
      <div class="header1">
          Video Admin
      </div>
      <div class="header2">
          <form class="" action="" method="post">
            <label for="">Yeni Video Ekle</label>
            <button id="btn_new_video" type="button" name="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
          </form>
      </div>
    </div>
    <div class="innerbody">
      <div id="live_data">

      </div>
    </div>




  </body>
</html>
<script>
  $(document).ready(function(){
    function fetch_data()
      {
           $.ajax({
                url:"select.php",
                method:"POST",
                success:function(data){
                  $('#live_data').html(data);
                }
           });
      }
    fetch_data();
    $(document).on('click', '#btn_new_video', function(){
      top.location.href=["page3.php"]; //-> aynı sayfada page3.ü açıyor bir alttaki yeni seçmede
      //window.open("page3.php");
    });
    $(document).on('click', '#btn_guncelle', function(){
      var id = $(this).attr('data-id3');
      //var id = $('#') // id alınmalı
      //güncelleme tuşuna basında yeni sayfaya geçicek.
      //window.open("page4.php");
      //burada butona basılında id page4 sayfasına gönderilmeli
      $.ajax({
        url:"page4.php?id="+id,
        method:"POST", //BURASI POST TA OLABİLİR.
        data:{id:id},
        dataType:"text",
        success:function(data){
          //alert (data);
          fetch_data(); //güncellenen datayı ikinci sayfaya koyması için.
          top.location.href=["page4.php?id="+id];
          //window.open("page4.php?id="+id);
        }
      });
    });

    $(document).on('click','#btn_delete', function(){

      var id = $(this).attr('data-id4');
      if(confirm("Are you sure want to remove this video? ")){
        $.ajax({
          url:"update.php",
          method:"POST",
          data:{id:id},
          dataType:"text",
          success:function(data){
            fetch_data();
            //alert(data);
          }
        });
      }

    });
  });
</script>
