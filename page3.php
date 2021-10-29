
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Video Ekleme</title>
    <link rel="stylesheet" href="page3.css?v=<?php echo time(); ?>">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="header">
        <div class="header1">
          Video Admin
        </div>
        <div class="header2">
            <form class="" action="index.html" method="post">
              <label for="">Yeni Video Ekle</label>
              <button id="btn_new_video"type="button" name="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </form>
        </div>

    </div>
    <div class="innerbody">
      <div class="first">
        <h1>Video Ekleme</h1>
      </div>
      <div class="second">
        <div class="btn">
          <button id="btn_vazgec" type="button" name="button" ><i class="fa fa-times" aria-hidden="true"></i></button>
          <br>Vazgeç
        </div>
        <div class="form_kismi">
          <form id="form" class=""  method="post">
            <label for="">Youtube Link</label><input id="input1" type="url" name="un" >
            <br>
            <label for="">Video Tanımı</label><input id="input2" type="text" name="pw" >
            <br>
            <input id="btn_save" type="submit" name="save" value="Kaydet">
          </form>
        </div>

      </div>

    </div>

  </body>
</html>

<script>
  $(document).ready(function(){
    $(document).on('click', '#btn_new_video', function(){
      top.location.href=["page3.php"]; //-> aynı sayfada page3.ü açıyor bir alttaki yeni seçmede
      //window.open("page3.php");
    });
    $(document).on('click', '#btn_save', function(){
        var link = document.getElementById("input1").value; // bu value text 'de olabilir.'
        var description = document.getElementById("input2").value; // bu value text 'de olabilir.'
        if(link == '' ){
          alert("boş alan bırakmayınız");
          return false;
        }

        if(description == ''){
          alert("boş alan bırakmayınız");
          return false;
        }
        $.ajax({
          url:"insert.php",
          method:"POST",
          data:{link:link,description:description},
          dataType:"text",
          success:function(){
            top.location.href=["page2.php"]; // eğer database'e konulursa page2ye git.
          }
        });
    });
    $(document).on('click', '#btn_vazgec', function(){

      top.location.href=["page2.php"]; //-> aynı sayfada page3.ü açıyor bir alttaki yeni seçmede
      //window.open("page2.php");
    })
  });

</script>
