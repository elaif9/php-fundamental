<?php
/**
 * Program PHP keempatbelas = Operator Logika
 * Mengetahui penggunaan operator logika pada PHP 
 * 
 * AND (nilai) --> untuk membandingkan apakah antar nilai yang dibandingkan adalah sama atau tidak
 *          misal $i = 1, dan $j = 1
 *          Jika dibandingkan berdasarkan nilai variabelnya, maka nilainya adalah TRUE
 * 
 * AND (nilai & tipe data) --> untuk membandingkan nilai berserta tipe datanya, misal nilai
 *          $i adalah 1 sedangkan $j adalah "1", nilai akan tetap TRUE
 *          jika menggunakan $i === $j, maka hasilnya false, karena $i int sedangkan $j adalah string
 * 
 * NOT (nilai) --> untuk membandingkan apakah antar nilai adalah berbeda atau tidak,
 *          misalnya $i = 1 dan $j = 2
 *          maka nilai logikanya adalah TRUE
 * */

$sembilan = 9;
$_9 = "9";

// Contoh penggunaan AND dengan pembanding nilai dan tipe data
if($sembilan === $_9){
    echo "angkanya sama-sama $sembilan <br>";
} else {
    echo "jenis nilainya tidak sama <br>";
}

// Contoh penggunaan NOT dengan pembanding nilai dan tipe data
if($sembilan !== $_9){
    echo "tipe angkanya tidak-sama $sembilan <br>";
} else {
    echo "jenis nilainya tidak sama <br>";
}