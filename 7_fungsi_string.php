<?php 
/**
 * Program PHP ketujuh = fungsi string  
 * Mengetahui fungsi-fungsi string pada PHP 
 * 
 * Operasi yang bisa digunakan adalah
 *      menghitung string (strlen), menghitung kata (str_word_count), mengganti nilai string (str_replace), mengulang nilai string (str_repeat)
 * 
 * Untuk menghitung karakter dan spasi -> strlen(kalimat)
 * Untuk menghitung jumlah kata -> str_word_count(kalimat)
 * Untuk mengganti suatu nilai string bisa menggunakan -> str_replace(kata_yang_dicari, kata_yang_ingin_dipakai, kalimatnya)
 * Untuk mengulang string, bisa menggunakan -> str_repeat(nilai_string, jumlah_pengulangan) 
 * 
 * */

 $string_text = "ini adalah string";
 $single_text = "dor ";

 echo "jumlah \$string_text ada: " . strlen($string_text) . "<br>";
 echo "jumlah kata pada kalimat \$string_text ada: " . str_word_count($string_text) . "<br>";
 echo "untuk mengganti kata _ini_ menjadi _itu_ pada $string_text, gunakan str_replace seperti berikut: " . str_replace("ini", "itu", $string_text) . "<br>";
 echo "untuk pengulangan, digunakan str_repeat seperti berikut: " . str_repeat($single_text, 5) . "<br>";
?>