
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>MyQuran - Quran</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 	<meta name="description" content="Al-Quran Berbasis Online , Untuk memudahkan pengguna menghafal Al-Quran">
	<meta name="author" content="Fajar Saepul">
	<meta name="keywords" content="Al Quran Tejemahan Indonesia , Al Fatihah, Al Baqarah , Al-Imran , An-Nisa , Al-Maidah , Al-A'raf ,Al-An'am ">
	<meta name="language" content="ID">
	<meta name="coverage" content="Worldwide">
	<meta name="distribution" content="Global">
	<meta name="google-site-verification" content="bCqjBiiwifBXrKB7pPbT3wMZGGBbUjuz6PUEtko06RA" />
	<link href="../gogram.net/assets/img/gogram.html" rel="icon" type="image/x-icon" />
 	<!-- Tell the browser to be responsive to screen width -->
 	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 	<!-- Bootstrap 3.3.6 -->
 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  	<!-- Font Awesome -->
 	<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 	<!-- Ionicons -->
 	<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 	<!-- Theme style -->
 	<link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
 	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>
	<style>
		.highlight-one .bullet-one {
		  height: 150px;
		  background-size: cover;
		}
		.highlight-one .bullet-two {
		  margin-bottom: 5px;
		}
		.highlight-two {
		  max-width: 100px;
		  margin-top: -70px;
		  margin-bottom: 5px;
		  border: 3px solid #fff;
		  border-radius: 100%;
		  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
		}
		.bullet-two {
		  margin-top: 0;
		  margin-bottom: 0;
		  font-size: 16px;
		  color: inherit;
		}
		.compersation-one,
		.compersation-one:hover,
		.compersation-one:focus {
		  color: inherit;
		  text-decoration: inherit;
		}
		.bullet-two > a,
		.bullet-two > small,
		.bullet-two > small > a
		.highlight-one .bullet-two {
		  margin-bottom: 5px;
		}
		.list-one {
		  list-style: none;
		  padding: 0;
		}
		.ul-list {
		  display: inline-block;
		  padding: 0 10px;
		  border-right: 1px solid #d4dbe0;
		}
		.ul-list:last-child {
		  border-right: 0;
		}	
		
		@font-face {
  font-family: 'Uthmani';
  src : url('http://localhost/quran/font/UthmanicHafs1 Ver09.otf') format('truetype');
}
 
h3{
  background:#222;
  color:#f9f9f9;
   padding:5px;
}
 
.arabic{
    font-family: 'Uthmani', serif;
    font-size: 28px; font-weight: normal;
    direction:rtl;
    padding : 0 5px;
    margin : 0;
}
.arabic_number {
    font-size: 28px; font-weight: normal;
}
.arabic_center{
    font-family: 'Uthmani', serif;
    font-size: 28px; font-weight: normal;
    text-align:center;
    padding : 0 5px;
    margin : 0;
}
.latin {
    font-family: serif;
    font-size: 14px; font-weight: normal;
    direction:ltr;
    padding : 0;
    margin : 0;
}
		
		h1{
  font-family: sans-serif;
}

h2 {
  text-align: center;
}

table caption {
	padding: .5em 0;
}

@media screen and (max-width: 767px) {
  table caption {
    border-bottom: 1px solid #ddd;
  }
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}
 
.latin {
    font-family: serif;
    font-size: 14px; font-weight: normal;
    direction:ltr;
    padding : 0;
    margin : 0;
}
.wadah-mengetik
{
	font-size: 22px;
	width: 740px;
	white-space:nowrap;
	overflow:hidden;
	-webkit-animation: ketik 5s steps(50, end);
	animation: ketik 5s steps(50, end);
}

@keyframes ketik{
		from { width: 0; }
}

@-webkit-keyframes ketik{
		from { width: 0; }
}
</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
 <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
         <a href="http://localhost/quran/welcome/index.html" class="navbar-brand"><b>My</b>Quranku</a>
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                	<li ><a href="../quran/index.php"><i class="fa fa-book"></i>&nbsp;Halaman Utama</a>
                    <li ><a href="../quran/baca.php"><i class="fa fa-book"></i>&nbsp;Baca Al-Quran</a>
                    </li>  
                               </ul>
        </div>
      </div>
    </nav>
  </header>a
  <div class="content-wrapper">
<div class="container">
    <div style="margin-top:50px;">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center><h4>Selamat Membaca </h4></center>
	<!-------------------------------------------------->
	<!--[   Al Qur'an Digital Berbasis PHP & MySQL   ]-->	
	<!--[ 	    Code By: Muhammad Hilmy Taufik       ]-->
	<!--[ 	            Copyright 2019               ]-->
	<!-------------------------------------------------->
	<!--[ 		Ikuti Saya Di Sosial Media           ]-->
	<!-------------------------------------------------->
	<!--[ Github    : MuhammadHilmyTaufik			 ]-->
	<!--[ Instagram : @muhammadhilmytaufikk			 ]-->
	<!--[ Facebook  : Muhammad Hilmy Taufik			 ]-->
	<!-------------------------------------------------->
<?php 
error_reporting(0);
include 'database/config.php';
include 'daftarsurah.php';
$surat = isset($_GET['surat']) ? $_GET['surat'] : 0;
$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
if($surat == 0)
	show_daftar();
else
	show_quran($surat, $nama);

function format_arabic_number($number){
	$arabic_number = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
	$jum_karakter = strlen($number);
	$temp = "";
	for($i = 0; $i < $jum_karakter; $i++){
		$char = substr($number, $i, 1);
		$temp .= $arabic_number[$char];
	}
	return '<span class="arabic_number">'.$temp.'</span>';
}

?>
</body>
 <footer class="main-footer">
    <div class="container">
  
      <div class="pull-right hidden-xs">
          
        <b></b>
      </div>
      <center>
      <strong>Copyright Makassar &copy; 2019 <a href="../alquran/index.html">Muhammad Hilmy Taufik - Daeng Coding Team</a></strong> All Rights Reserved  
      </center>  </div>
  </footer>
</div>
</html>