<?php

/**
 * Program PHP kesembilan = metode array  
 * Mengetahui metode-metoede pada array pada PHP 
 * 
 * Untuk menampikan unique data tanpa duplikat --> array_unique 
 * Untuk membalik urutan data digunakan --> array_reverse
 * Untuk mengacak urutan data array -> shuffle
 * 
 * */

// data array
$array_data = array('satu', 'dua', 'tiga','satu');
$array_data2 = ['one', 'two', 'three'];

// output untuk unique array
echo "menampilkan data array unique: ";
print_r(array_unique($array_data));
echo "<br>";

// output untuk reverse array
echo "menampilkan array dengan urutan terbalik: ";
print_r(array_reverse($array_data2));
echo "<br>";

// output untuk shuffle array
echo "menampilkan array dengan urutan terbalik: ";
shuffle($array_data2);
print_r($array_data2);

?>