<!doctype html>
<html lang="en">
    <head>
		<!-- Site made with Mobirise Website Builder v4.8.1, https://mobirise.com -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="../../assets/images/logotegal.png" type="image/x-icon">
        <meta name="description" content="">
        <title>Portal | Kabupaten Tegal</title>
        <link rel="stylesheet" href="../../assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
        <link rel="stylesheet" href="../../assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="../../assets/tether/tether.min.css">
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="../../assets/dropdown/css/style.css">
        <link rel="stylesheet" href="../../assets/animatecss/animate.min.css">
        <link rel="stylesheet" href="../../assets/socicon/css/styles.css">
        <link rel="stylesheet" href="../../assets/theme/css/style.css">
        <link rel="stylesheet" href="../../assets/mobirise/css/mbr-additional.css" type="text/css">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

    <style>
        input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.main {
 display: flex;
 width: 100%;
 height: 150px;
 background-color: yellow;
}
.main h2{
    margin-top: 50px;
    margin-left: -30px;
    color: black;
}
.two{
    background-color: white;
    height: 482px;
    
}
.formulir{
    margin-left: 30px;
}

.bawah{
  height: 180px;
  background-color: #FAFAD2;

}

.bawah h4{
  text-align: center;
  margin-top: 40px;
}

.bawah img{
  margin-left: 280px;
}
.historifoto img{
  float: left;
}

.historikata p{
   margin-left: 700px;
}
</style>
</head>
<body>
<!-- cek apakah sudah login -->
<?php 
 session_start();
 if($_SESSION['status']!="login"){
     header("location:../index.php?pesan=belum_login");
 }
 ?>   
    <section class="menu cid-r2t69rfwBI" once="menu" id="menu2-0">
<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>
    <div class="menu-logo">
        <div class="navbar-brand">
            <span class="navbar-logo">
                <a href="index.html">
                    <img src="../../assets/images/logotegal.png" alt="Serenidad Homes" title="Own your Home today with serenidad Homes." style="height: 4.9rem;">
                </a>
            </span>
            <span class="navbar-caption-wrap"><a class="navbar-caption text-success display-4" href="../index.php">
                    KABUPATEN TEGAL</a></span>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link link text-secondary display-4" href="../profile.php"><span class="" style="color: rgb(255, 51, 102);"></span>PROFILE</a></li>      

                
                <li class="nav-item dropdown open"><a class="nav-link link text-secondary dropdown-toggle display-4" href="contacts.html" data-toggle="dropdown-submenu" aria-expanded="true"><span class="" style="color: rgb(55, 120, 11);"></span>STATISTIK</a>   <div class="dropdown-menu"><a class="text-secondary dropdown-item display-4" href="../webjumlahsembuhcovidkabtegal/tampil_data.php">Sebaran Jumlah</a><div class="dropdown open"></div><a class="text-secondary dropdown-item display-4" href="tabeldata.php" aria-expanded="false">Sebaran Objek</a></div></li>   
                <li class="nav-item dropdown open"><a class="nav-link link text-secondary dropdown-toggle display-4" href="contacts.html" data-toggle="dropdown-submenu" aria-expanded="true"><span class="" style="color: rgb(55, 120, 11);"></span>PETA</a>   <div class="dropdown-menu"><a class="text-secondary dropdown-item display-4" href="../webjumlahsembuhcovidkabtegal/index.php">Peta Jumlah Sembuh Covid-19</a><div class="dropdown open"></div><a class="text-secondary dropdown-item display-4" href="index.php" aria-expanded="false">Peta Persebaran Objek Puskesmas</a></div></li>   
                              
                <li class="nav-item"><a class="nav-link link text-secondary display-4" href="../contacts.php"><span class="" style="color: rgb(255, 51, 102);"></span>CONTACT US</a></li>
                <li class="nav-item"><a class="nav-link link text-secondary display-4" href="../logout.php"><span class="" style="color: rgb(255, 51, 102);"></span>LOGOUT</a></li>   
            </ul>
        
    </div>
</nav>
</section>

<section class="engine"><a href="https://mobiri.se/i">free website creation software</a></section><section class="carousel slide cid-r2t9seiLK8" data-interval="false" id="slider1-1">



<div class="full-screen"><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="4000"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-1" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="3"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(../../assets/images/patungtegal.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="../../assets/images/slawiayu.png"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1 ">WELCOME TO PORTAL KABUPATEN TEGAL</h2><p class="lead mbr-text mbr-fonts-style display-5">Selamat datang di Website Portal Kabupaten Tegal.</p><div class="mbr-section-btn" buttons="0"><a</a> <a</a></div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(../../assets/images/masjid.png);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="../../assets/images/slawiayu.png"><div class="carousel-caption justify-content-center"><div class="col-10 align-left"><h2 class="mbr-fonts-style display-1"></h2><p class="lead mbr-text mbr-fonts-style display-5"></p></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(../../assets/images/slawiayu.png);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.6;"></div><img src="../../assets/images/jalanraya.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">&nbsp;PORTAL KABUPATEN TEGAL</h2><p class="lead mbr-text mbr-fonts-style display-5">Merupakan sebuah situs untuk mengakomodir semua aplikasi
yang dimiliki oleh Pemerintah Kabupaten Tegal.</p><div class="mbr-section-btn" buttons="0"><></a> <></a></div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(../../assets/images/jalanraya.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="../../assets/images/ebea5cae-7efd-4c69-9b29-e9fe982d8f72-632x801.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1"></h2><p class="lead mbr-text mbr-fonts-style display-5"></p><div class="mbr-section-btn" buttons="0"></div></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-1"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-1"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>

</section>




    <div class="bawah">
            <BR><BR><h2 class="mbr-section-title pb-3 mbr-fonts-style display-2" style="text-align: center;">
            Tambah Data Persebaran Objek Puskesmas Kabupaten Tegal<hr style="width:50%;text-align:left;margin-left:338px;color: rgb(255, 228, 181);height: 3px;">
            </h2>    
    </div>
<?php
include "koneksi.php";
?>
<font face="verdana">
<form class="form1" method="POST" action="">
<div class="two">
<div class="formulir">
<div><br>Id</div><div><input class="search" type='number' name='id' placeholder="Masukkan nomor.."></div><br>
<div>Nama Puskesmas</div><div><input class="search" type='text' name='nama' placeholder="Masukan Nama Puskesmas.."></div>
<div>Latitude</div><div><input class="search" type='text' name='lat' placeholder="Masukan Latitude.."></div>
<div>Longitude</div><div><input class="search" type='text' name='lng' placeholder="Masukan Longitude.."></div>
<div><input type='submit' name="simpan" value='Simpan'><input type='reset' style="height: 43px; width: 130px; border-radius: 5px; margin-left: 130px; color: white; background-color: #FF4500;"></div>
</div>
</div>
<?php
if(isset($_POST['simpan']))
{
    $id = $_POST['id'];
    $nama  = $_POST['nama'];
    $lat     = $_POST['lat'];
    $lng       = $_POST['lng'];
    mysqli_query($conn,"INSERT INTO puskesmas (id,nama,lat,lng) values ('$id','$nama','$lat','$lng')")
    or die(mysqli_error($conn));
    header("location:index.php");
}
?>



<section class="cid-r2teHS1OXg" id="footer2-d">

    

    

<div class="container">
    <div class="media-container-row content mbr-white">
        <div class="col-12 col-md-3 mbr-fonts-style display-7">
            <p class="mbr-text"><a href="contacts.php">
                </a><strong><a href="contacts.php">Address</a></strong><a href="contacts.php">
                </a><br><a href="contacts.php">
                </a><br><a href="contacts.php">  Jl. Dr. Soetomo No 1, Slawi&nbsp;</a><br><a href="contacts.php">Kabupaten Tegal&nbsp;</a><br><a href="contacts.php">
                </a><br><a href="contacts.php">
                </a><br><strong><a href="contacts.php">Contacts</a></strong><a href="contacts.php">
                </a><br><a href="contacts.php">
                </a><br><a href="contacts.php">Email: kominfo@tegalkab.go.id &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a><br><a href="contacts.html">Phone: (0283) 4561555&nbsp;</a><br><br></p>
        </div>
        <div class="col-12 col-md-3 mbr-fonts-style display-7">
            <p class="mbr-text"><a href="contacts.html">
                </a><strong><a href="contacts.html">Links</a></strong><a href="contacts.html">
                </a><br><a href="contacts.html">
                </a><br><a href="profile.php">PROFILE</a><br> <a class="text-primary" href="contacts.html">&nbsp;</a><br><a class="text-primary" href="index.php">HOME &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a><br><a href="contacts.php">
                </a><br><strong><a href="contacts.php">Feedback</a></strong><a href="contacts.php">
                </a><br><a href="contacts.php">
                </a><br><a href="contacts.php">Kirimkan ide, laporan bug, saran Anda kepada kami! Umpan balik apa pun .
            </a></p>
        </div>
        <div class="col-12 col-md-6">
            <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63378.79256841126!2d109.08332137654216!3d-6.86967891263068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9df95633e29%3A0xba923dd45f2aac0!2sKota%20Tegal%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1635398299431!5m2!1sid!2sid" allowfullscreen=""></iframe></div>
            
        </div>
    </div>
    <div class="footer-lower">
        <div class="media-container-row">
            <div class="col-sm-12">
                <hr>
            </div>
        </div>
        <div class="media-container-row mbr-white">
            <div class="col-sm-6 copyright">
                <p class="mbr-text mbr-fonts-style display-7">
                    © Copyright 2021 Candra Agung Purnomo - All Rights Reserved
                </p>
            </div>
            <div class="col-md-6">
                <div class="social-list align-right">
                    <div class="soc-item">
                        <a href="https://twitter.com/serenidad" target="_blank">
                            <span class=""></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.facebook.com/pages/serenidadhomes." target="_blank">
                            <span class=""></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="#top" target="_blank">
                            <span class=""></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://instagram.com/serenidad" target="_blank">
                            <span class=""></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://plus.google.com/u/0/+serenidad" target="_blank">
                            <span class=""></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.behance.net/serenidad" target="_blank">
                            <span class=""></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<script src="../../assets/web/assets/jquery/jquery.min.js"></script>
        <script src="../../assets/tether/tether.min.js"></script>
        <script src="../../assets/popper/popper.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/dropdown/js/script.min.js"></script>
        <script src="../../assets/touchswipe/jquery.touch-swipe.min.js"></script>
        <script src="../../assets/viewportchecker/jquery.viewportchecker.js"></script>
        <script src="../../assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
        <script src="../../assets/smoothscroll/smooth-scroll.js"></script>
        <script src="../../assets/parallax/jarallax.min.js"></script>
        <script src="../../assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
        <script src="../../assets/mbr-clients-slider/mbr-clients-slider.js"></script>
        <script src="../../assets/sociallikes/social-likes.js"></script>
        <script src="../../assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
        <script src="../../assets/theme/js/script.js"></script>
        <script src="../../assets/slidervideo/script.js"></script>


<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>