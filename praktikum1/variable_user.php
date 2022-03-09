<?php 
//membuat variable user
// X = 5
$nama = "Diffa nur hidayah";
$umur = 19;
$berat = 43;

// menampilkan variable
echo "Nama : ".$nama;
echo "<br>umur : " .$umur;
echo "<br>berat : ".$berat;

// menampilkan variable sistem
echo "<br/>Document Root : " . $_SERVER
['DOCUMENT_ROOT'];

// membuat variable constant
define('PHI', 3.14);
$r = 10;
$luas = PHI * $r * $r;

// menampilkan luas lingkaran 
echo "<br> luas lingkaran : $luas";

