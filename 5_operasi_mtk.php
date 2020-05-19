<?php
/**
 * Program PHP kelima = operasi matematik  
 * Mengetahui operasi matematika pada PHP 
 * 
 * Operasi yang bisa digunakan adalah
 *      penjumlahan (+), pengurangan (-), perkalian (*), dan pembagian (/)
 * 
 * 
 * */

$integer = 1000;
$float = 500.4231;

// Operasi penjumlahan dengan variable dan angka langsung
$jumlah = $integer + $float;
// Operasi penjumlahan dengna cara lain: menjumlah angka itu sendiri dengan angka lain
$integer += $float;

// Untuk cara pertama
echo "untuk \$integer = 1000 dan \$float = $float, jumlahnya adalah $jumlah <br>";
// Untuk cara kedua
echo "untuk \$integer = 1000 dan \$float = $float, jumlahnya adalah $integer";

?>