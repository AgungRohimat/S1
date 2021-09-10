<?php

// function perkenalan ( $nama ,  $umur ) {
//     echo "<h1>Halo Perkenalkan Nama Saya" .$nama. "</h1>";
//     echo "<h1>Umur Saya" .$umur. "Tahun</h1><br>";
    
    
  
//     if ($umur > 17) {
//       echo "<p>Anda Sudah Memiliki Identitas(KTP).</p>";
//     }else{
//         echo "Anda Belum memiliki Identitas(KTP)";
//     }
//   }
// perkenalan("Agung",17);






// function penjumlahan($angka1, $angka2){
//     $tambah = $angka1 + $angka2;
//     $kurang = $angka1 - $angka2;
//     $kali = $angka1 * $angka2;
//     $bagi = $angka1 / $angka2;

//     echo "Hasil Penjumlahan : " . $tambah ."<br>";
//     echo "Hasil Pengurangan : " . $kurang ."<br>";
//     echo "Hasil Perkalian : " . $kali ."<br>";
//     echo "Hasil Pembagian : " . $bagi ."<br>";
// }
// penjumlahan(10,5);

//Parameter Default
function Penjumlahan($usia,$nama="Agung"){
    echo "Nama : ". $nama . "<br>";
    echo "Umur : ". $usia . "<br>";
}
Penjumlahan(18);
?>