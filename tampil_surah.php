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
 function show_quran($surat, $nama=''){ 
    mb_internal_encoding('UTF-8');
    if (($surat < 1) || ($surat > 114)) exit;
    echo '<p><a href="http://localhost/quran/baca.php">Kembali ke Index</a></p>';
    echo '<h3>'.$nama.'</h3>';
    if($surat > 1) {
        echo '<p class ="arabic_center">'.mb_strtolower('بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ').'</p>';
        echo '<hr />';
    }
 
    $data = database("SELECT A.text as arabic, B.text as indonesia FROM ArabicQuran A LEFT OUTER JOIN IndonesianQuran B ON A.index=B.index WHERE A.surat = $surat"); 
 
    $ayat = 1;
    foreach($data as $d){
            $str = mb_strtolower($d['arabic']);
        echo '<p class ="arabic">'. $str .' ﴿'.format_arabic_number($ayat).'﴾</p>';
        echo '<p class ="latin">'.'['.$ayat.'] '.$d['indonesia'] .'</p>';
        echo '<p> <audio controls controls controlsList="nodownload"><source  src="'.$d['mp3'].'" type="audio/mp3"></audio></p>';        
        echo '<hr />';
        $ayat++;
    }
    echo '<p><center><a href="http://localhost/quran/baca.php">Kembali ke Index</a></center></p>';
}

 ?>