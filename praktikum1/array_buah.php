<?php
// mendefinisikan array 
$ar_buah = ["alpukat", "anggur","apple","rambutan"];
//cetak buah ke index ke 2
echo $ar_buah[3];
//cetak jumlah buah
echo '<br/>jumlah buah :' .count($ar_buah);
//cetak seluruh buah 
echo '<ol>';
foreach($ar_buah as $buah){
    echo '<li>'. $buah. '<li/>';
}
echo '<ol>';
//tambahkan buah 
$ar_buah[] = "kelengkeng";
//hapus buah index ke 1
unset($ar_buah[2]);
//ubah buah index ke 0 menjadi duku 
$ar_buah[0]="duku";
//cetak seluruh buah dengan index nya 
echo '<ul>';
foreach($ar_buah as $k => $v){
echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
}
echo '</ul>';
?>