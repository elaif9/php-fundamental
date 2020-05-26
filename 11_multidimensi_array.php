<?php
/**
 * Program PHP kesebelas = multidimensi array  
 * Mengetahui multidimensi array PHP 
 * 
 * Struktur untuk multidimensi array adalah seperti berikut
 *      -> xy
 *      -> x = urutan index array
 *      -> y = urutan index isi array dalam array
 * 
 * misalnya
 *      array(soto,kuah)
 *      array(sate,bakar)
 * maka strukturnya
 *      array untuk array(soto,kuah) adalah 0
 *          untuk soto adalah 00, untuk kuah adalah 01
 *      array untuk array(sate,bakar) adalah 1
 *          untuk soto adalah 10, untuk kuah adalah 11
 * 
 * */

 // Data Array
 $makanan = array(
                array("soto", "kuah"),
                array("sate", "bakar"),
                array("tongseng", "kuah")
            );

 // Mengeluarkan output array
 print_r($makanan);
 echo "<br>";

 // Mengeluarkan salah satu isi array
 print_r($makanan[1][0]);
 echo "<br>";

 // Mengganti isi array secara langsung
 $makanan[1][0] = "ayam bakar";
 print_r($makanan[1][0]);

?>