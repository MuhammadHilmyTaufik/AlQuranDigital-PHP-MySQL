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
include 'tampil_surah.php'; 
function show_daftar(){
    mb_internal_encoding('UTF-8');
    $data = database("SELECT `index`, surat_indonesia, arti, jumlah_ayat FROM DaftarSurat");
echo '</div>';
	echo '<script type="text/javascript" src="js/jquery.js"></script>';
	echo '<script type="text/javascript" src="js/bootstrap.js"></script>';
  	echo '<center>';
	echo '<div class="container">';
	echo '<div class="row">';
	echo '<div class="col-xs-12">';
	echo '<div class="table-responsive">';
	echo '<table summary="MyQuran" class="table table-bordered table-hover">';
    echo '<caption class="text">Daftar Isi - <a href="#" target="_blank">MyQuran</a>:</caption>';
    echo '<thead>';
    echo '<tr><th>No.</th><th class="col-md-5 col-xs-5">Surah</th><th class="col-md-4 col-xs-4">Arti</th><th class="col-md-4 col-xs-3">Jumlah Ayat</th></tr>';
    foreach($data as $d){
        echo '<tr><td>'.$d['index'].'</td><td><a href="http://localhost/quran/baca.php?surat='.$d['index'].'&nama='.$d['surat_indonesia'].'">'.$d['surat_indonesia'].'</a></td><td>'.$d['arti'].'</td></td><td>'.$d['jumlah_ayat'].'</td></tr>';
    }
	echo '</thead>';
    echo '</table>';
    echo '</center>';
}
?>