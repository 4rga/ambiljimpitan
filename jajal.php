<?php 
ini_set('default_charset', 'UTF-8');

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST'){
	$mode = $_REQUEST['mode'];
    $tanggal = $_REQUEST['tanggal'];
    $blok = $_REQUEST['blok'];
    $nominal = $_REQUEST['nominal'];
    $petugas = $_REQUEST['petugas'];
    
	ob_start();
	echo "Mode : ".$mode."\r\n";
	echo "Tanggal : ".$tanggal."\r\n";
	echo "Blok : ".$blok."\r\n";
	echo "Nominal : ".$nominal."\r\n";
	echo "petugas : ".$petugas;
	$htmlStr = ob_get_contents();    
	file_put_contents("jajal.txt", $htmlStr); 
}

?>