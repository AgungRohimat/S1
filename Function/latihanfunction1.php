<?php


function luaslingkaran($jari){
    $luaslingkaran = 3.14 * $jari * $jari;
    

    
     return $luaslingkaran;
}


function luassegitiga($t, $a){
    $luassegitiga = 0.5 * $a * $t;
    

    
    return $luassegitiga;
}



function luaspersegipanjang($p, $l){
    $luaspersegipanjang =$p * $l;
    

    
     return $luaspersegipanjang;
}
echo "Luas Lingkaran : ". luaslingkaran(5). "<br>";
echo "Luas Segitiga : ". luassegitiga(10,4). "<br>";
echo "Luas Persegi Panjang : " .luaspersegipanjang(10,5)."<br>";

?>