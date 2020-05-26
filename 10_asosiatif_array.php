<?php
/**
 * Program PHP kesepuluh = asosiatif array  
 * Mengetahui penggunaan metode asosiatif pada array PHP 
 * 
 * Key digunakan untuk menggantikan index pada array, sehingga penggunaan
 *      key adalah sebagai index
 * Penulisan key adalah sebagai berikut
 *      "key" => "isi array"
 * 
 * Metode array_value: untuk mengeluarkan nomor index pada key
 * Metode array_keys: untuk mengeluarkan nomor index beserta nama key
 * Metode array_merge: untuk menggabungkan dua atau lebih array
 * */

$elektronik = array("tv" => "panasonic",
                    "ac" => "sharp",
                    "kulkas" => "lg"
                );

$elektronik2 = array("microwave" => "sanken",
                     "magicjar" => "miyako");

// Untuk mengeluarkan semua isi array
print_r($elektronik);

// Untuk memanggil salah satu key dari array
// $nama_array[key];
echo "<br>Merek TV nya adalah " . $elektronik["tv"];

// Untuk mengubah isi salah satu key dari array
// $nama_array[key] = nilai_baru;
$elektronik["tv"] = "Sharp";
echo "<br>Merek TV yang baru adalah " . $elektronik["tv"] . "<br>";

// Penggunaan array_value
print_r(array_values($elektronik));
echo "<br>";

// Penggunaan array_keys
print_r(array_keys($elektronik));
echo "<br>";

// Penggunaan array_merge
print_r(array_merge($elektronik, $elektronik2));

?>