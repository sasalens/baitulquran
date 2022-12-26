<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="konten/icon.ico" type="image/x-icon" />
<title>DAFTAR</title>
<link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="iLand Multipurpose Landing Page Template">
<meta name="keywords" content="iLand HTML Template, iLand Landing Page, Landing Page Template">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,500,600,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/animate.css">
<!-- Resource style -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/style2.css">
<!-- Resource style -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/stylebaru.css">
</head>
<body>
<div class="wrapper">
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top menu">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand page-scroll" href="index.php"><img src="konten/logo.png" width="130" height="50" alt="iLand" /></a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a class="page-scroll" href="index.php">Home</a></li>
            <li><a class="page-scroll" href="#kontak">Kontak</a></li>
            <li><a class="page-scroll" href="login.php">Login  <i class="ion-log-in"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
    

  <!-- data santri -->

  <div class="hero-section ubahdata">
    <div class="ubah">
        <h1 class="judul">Form Pendaftaran</h1>

        <form id="input" class="form-horizontal edit" action="aksi.php" method="POST">
            <div class="form-group">
                <div class="col-xs-8">
                  <label for="id" class="">Id :</label><br><br>
                  <input type="id" name="id" class="form-control" id="id" placeholder="Id akan terisi otomatis">
                </div>  
            </div><br>
            <div class="form-group">
              <div class="col-xs-8">
                <label for="nama">Nama Lengkap :</label><br><br>
                <input type="nama" name="nama" class="form-control" id="nama" placeholder="Masukkan nama lengkap">
              </div> 
            </div><br>
            <div class="form-group">
              <div class="col-xs-8">
                <label for="alamat">Alamat Lengkap :</label><br><br>
                <input type="alamat" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat lengkap">
              </div>
            </div><br>
            <div class="form-group">
              <div class="col-xs-8">
                <label for="ttl">Tanggal Lahir :</label><br><br>
                <input type="date" name="ttl" class="form-control" id="ttl">
              </div> 
            </div><br>
            <div class="form-group">
              <div class="col-xs-8">
                <label for="nohp">Nomor Hp :</label><br><br>
                <input type="nohp" name="nohp" class="form-control" id="nohp" placeholder="Masukkan nomor hp">
              </div>
            </div><br>
            <div class="form-group">
              <div class="col-xs-8">
              <label for="motivasi">Motivasi Masuk Pesantren :</label><br><br>
                <textarea type="motivasi" name="motivasi" id="motivasi" placeholder="Motivasi masuk pesantren" class="form-control" rows="3" style="height: 120px;"></textarea>
              </div>
            </div><br>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Dengan ini saya setuju dengan segala persyaratan.
              </label>
            </div>
            <div>
                <button type="submit" name="submit" class="tombol">Daftar</button>
            </div>
	    </form>
      
      <script>
        $(document).ready(function)(){
          $("#submit").submit(function)(event){
            event.preventDefault();
            var url = $("#submit").attr('action');
            $ajax({
              url : url,
              type : 'post',
              data : $("#submit").serialize(),
              datatype : 'json',
              succes : function(data){
                if(data.hasil === true) {
                  $(".suskses").html(data.username + " Berhasil di input");
                }
              }
            })
          }
        }
      </script>


<!-- Jquery and Js Plugins --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/plugins.js"></script> 
<script type="text/javascript" src="js/menu.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>
<script src="js/jquery.subscribe.js"></script> 
</body>
</html>







