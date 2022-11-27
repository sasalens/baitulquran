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
        <h1 class="judul" style="margin-bottom: 50px;">Registrasi</h1>

        <form class="form-horizontal edit" action="" method="POST">
            <div class="form-group">
                <div class="col-xs-6">
                  <label for="user" class="">Username :</label><br><br>
                  <input type="user" name="user" class="form-control" id="user" placeholder="Masukkan username anda">
                </div>  
            </div><br>
            <div class="form-group">
              <div class="col-xs-6">
                <label for="nama">Nama Lengkap :</label><br><br>
                <input type="password" name="pasword" class="form-control" id="pasword" placeholder="Masukkan Password anda">
              </div> 
            </div><br>
            <div>
                <button type="submit" name="submit" class="tombol">Register now</button>
            </div>
	    </form>

        <?php 
        include "koneksi.php";

        if(isset($_POST['submit'])){
            mysqli_query($kon,"INSERT INTO admin SET 
            user ='$_POST[user]',
            pasword ='$_POST[pasword]'
            ");
            
            echo "
                <script>
                    alert('Anda berhasil di tambahkan!');
                    document.location.href = 'login.php';
                </script>
            ";

            }
        ?>
    </div>
    
  </div>

 

  

  
  
    <!-- Footer Section -->
    <div class="footer" id="kontak">
      <div class="container">
        <div class="col-md-7"> <img src="konten/logo.png" width="200" height="75" alt="Image" />
          <p>Menjadi lembaga pendidikan tahfizh yang melahirkan generasi qur’ani, berakhlak mulia, mandiri, bermanfaat dan berprestasi.</p>
          <div class="footer-text">
            <p> Copyright © 2022 sasa. All Rights Reserved. Made with <i class="ion-heart"></i> by <a href="https://www.instagram.com/muhsamaan_/">sasaLens</a></p>
          </div>
        </div>
        <div class="col-md-5">
            <h1>Kontak Kami</h1>
            <p>Jl. Cempaka 5 Pokoh RT 01/RW IV Kel. Wonoboyo, Kec. Wonogiri, Kabupaten Wonogiri, Jawa Tengah 57615</p>
              <a href="https://api.whatsapp.com/send/?phone=6282111764236&text&type=phone_number&app_absent=0" ><i class="ion-social-whatsapp"></i></a>
              <a href="https://www.facebook.com/bqwonogiri/" target="_blank" ><i class="ion-social-facebook"></i></a>  
              <a href="https://www.instagram.com/baitul_quran_wonogiri/?hl=id" target="_blank" ><i class="ion-social-instagram"></i></a>
              <a href="#" ><i class="ion-social-twitter"></i></a>
              <a href="https://www.youtube.com/channel/UClJKR6-GzLmdzq0nbmCwdHw?sub_confirmation=1" target="_blank" ><i class="ion-social-youtube"></i></a>
        </div>
      </div>
    </div>
    
    <!-- Scroll To Top --> 
    
    <a id="back-top" class="back-to-top page-scroll" href="#main"> <i class="ion-ios-arrow-thin-up"></i> </a> 
    
    <!-- Scroll To Top Ends--> 
    
  </div>
  <!-- Main Section --> 
</div>
<!-- Wrapper--> 

<!-- Jquery and Js Plugins --> 
<script type="text/javascript" src="js/jquery-2.1.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/plugins.js"></script> 
<script type="text/javascript" src="js/menu.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>
<script src="js/jquery.subscribe.js"></script> 
</body>
</html>







