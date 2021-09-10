<?php

// File JSON yang akan dibaca
$file = "latihan.json";

// Mendapatkan file JSON
$no = file_get_contents($file);


// Mendecode anggota.json
$data = json_decode($no, true);



// Membaca/menampilkan data array menggunakan foreach
foreach($data as $d){
    
    echo "Nama : " . $d['nama']. "<br>";
    echo "Domisili : ". $d['domisili']. "<br>";
    echo "Hobi : ";

    foreach ($d['hobi'] as $d1) {
        echo "<ul>";
       echo "<li>" . $d1['h']. "</li>";
       echo "<li>" .$d1['h1']. "</li>";
       echo"<li>" . $d1['h2']. "</li>";
       echo "</ul>";
    }
}


?>