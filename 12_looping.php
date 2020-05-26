<?php
/**
 * Program PHP keduabelas = looping  
 * Mengetahui looping pada PHP 
 * 
 * Metode loop --> for(variabel(awal_mula); syarat; metode_pengulangan)
 * Sistem kerja --> loop akan melihat variabel awalnya, kemudian dicoba untuk dibandingkan dengan syarat,
 *                  jika variabel awalnya sudah memenuhi syarat, maka variabel awal tadi akan menyesuaikan
 *                  dengan awalnya
 * 
 * Contoh --> for($angka = 0; $angka < 5; $angka++)
 *      variabel $angka dimulai dengan index 0
 *      kemudian akan dibandingkan dengan syaratnya
 *      jika sesuai, maka akan dilanjutkan dengan metode pengulangannya
 * 
 * syarat -> bisa jadi <, >, <=, atau =>
 * metode pengulangan --> bisa ++, --
 * 
 * Metode foreach -> untuk mengeluarkan isi array semuanya secara satu persatu
 * 
 * Sistem kerja --> setiap isi dari variabel akan dikeluarkan, dari awal sampai akhir index array
 * 
 * Contoh --> for($angka = 0; $angka < 5; $angka++)
 *      variabel $angka dimulai dengan index 0
 *      kemudian akan dibandingkan dengan syaratnya
 *      jika sesuai, maka akan dilanjutkan dengan metode pengulangannya

 * */

// Output penggunaan loop
for($i = 0; $i < 5; $i++ ) {
    echo "test $i <br>";
}

$elektronik = array("panasonic", "lg", "sharp");
$elektronik2 = array("tv" => "panasonic", "ac" => "lg", "kulkas" => "sharp");

// Loop pada array menggunakan for
for($array = 0; $array < count($elektronik); $array++){
    echo "for untuk " . $elektronik[$array] . "<br>";
}

// Loop pada array menggunakan foreach
foreach($elektronik as $e) {
    echo "foreach untuk " . $e . "<br>";
}

// Loop pada asosiatif array menggunakan foreach
foreach($elektronik2 as $key => $value) {
    echo "foreach untuk key " . $key . "<br>";
}

// Loop pada array dengan while
$i = 0;
while($i < count($elektronik)){
    echo "while untuk " . $elektronik[$i] . "<br>";
    $i++;
}

// Loop pada array dengan do while
$j = 0;
do{
    echo "do while untuk " . $elektronik[$j] . "<br>";
    $j++;
} while($j < count($elektronik));
?>