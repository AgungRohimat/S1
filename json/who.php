<?php

// File JSON yang akan dibaca
$file = "who.json";

// Mendapatkan file JSON
$no = file_get_contents($file);


// Mendecode anggota.json


$mahasiswa = json_decode($no);


// Membaca/menampilkan data array menggunakan foreach



echo "Nama: {$mahasiswa->nama} <br>";
echo "Domisili: {$mahasiswa->domisili} <br>";
echo "<ul>";
echo "Hobi:<li> " . implode("</li> ", $mahasiswa->hobi);
echo "</ul>";

?>
