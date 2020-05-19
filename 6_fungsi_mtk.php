<?php
/**
 * Program PHP keenam = fungsi matematik  
 * Mengetahui mengetahui fungsi-fungsi matematika pada PHP 
 * 
 * Operasi yang bisa digunakan adalah
 *      pembulatan (round), pengacakan (rand)
 * 
 * Untuk round -> round(angka)
 * Untuk random -> rand(angka)
 * Untuk max -> max(angka1, angka2, angka3)
 * */

 $float = 24.64;
 $int_1 = 4;
 $int_2 = 5;
 $int_3 = 8;
 $int_4 = 1;

 echo "fungsi round untuk membulatkan $float menjadi " . round($float) . "<br>";
 echo "sedangkan fungsi rand adalah membuat angka random dengang range min - max seperti: " . rand(10, 30) . "<br>";
 echo "untuk menentukan angka paling besar dari beberapa angka (misal 4,5,8,1) menggunanakan max, maka angka paling besar adalah: " . max($int_1, $int_2, $int_3, $int_4);

?>