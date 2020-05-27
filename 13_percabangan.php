<?php
/**
 * Program PHP ketigabelas = percabangan
 * Mengetahui percabgan pada PHP 
 * 
 * if-else --> if-else adalah metode percabangan jika nilai memenuhi syarat, maka akan menghasilkan
 *              sesuatu, sedangkan jika tidak memenuhi syarat, maka akan masuk ke kondisi yang lain
 * 
 * if-else-if --> if-elseif adalah metode percabangan dengan lebih dari dua syarat atau lebih
 * 
 * */

$sembilan = 9;
$sepuluh = 10;
$sebelas = 11;

if($sembilan == 9){
    echo "angkanya adalah $sembilan <br>";
} else {
   echo "nilainya bukan $sembilan <br>";
}
 
if($sembilan > $sepuluh){
    echo "angka sembilan lebih dari sepuluh <br>";
} else if($sebelas > $sepuluh) {
    echo "angka sebelas lebih dari sepuluh <br>";
} else {
    echo "angka sembilan kurang dari sepuluh <br>";
}

?>