<?php
//devinisi konstanta 
define('PHI' , 3.14);
define('DBNAME', 'inventori');
define('DBSERVER' , 'localhost');

$jari = 6;
$luas = PHI * $jari * $jari;
$kll = 4 * PHI * $jari;

echo 'luas lingkaran dengan jari '.$jari.' : '.$luas;
echo '<br/>kelilingnya : '.$kll;
?>

<hr/>
<?php
echo 'nama databasenya ada di : '.DBNAME;
echo '<br/>lokasi databasenya ada di '. DBSERVER;
?>


