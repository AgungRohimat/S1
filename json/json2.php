<?php

// File JSON yang akan dibaca
$file = "anggota.json";

// Mendapatkan file JSON
$no = file_get_contents($file);


// Mendecode anggota.json
$data = json_decode($no, true);



// Membaca/menampilkan data array menggunakan foreach
foreach($data as $d){
    echo "No : ". $d['no']. "<br>" ;
    echo "Nama : " . $d['nama']. "<br>";
    echo "Jurusan : ". $d['jurusan']. "<br>";
 

}


?>