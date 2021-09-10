<?php

// $jso = '{
//   "nama": "Nurul Huda",
//   "domisili": "Surabaya",
//   "usia": 23,
//   "wni": true,
//   "hobi": [
//     "Berenang", "Berlari", "Bertamasya"
//   ]
// }';

// $mahasiswa = json_decode($jso);

// echo "Nama: {$mahasiswa->nama} <br>";
// echo "Domisili: {$mahasiswa->domisili} <br>";

// echo "Hobi: " . implode(", ", $mahasiswa->hobi);





// $nama1 = '{
//        "Nama": "Agung Rohimat",
//        "Askot": "Bandung",
//        "Umur": 17,
//        "wni": true,
//        "hobi": [
//          "Berenang", "Berlari", "Bertamasya"
//        ]
//          }';
//          $smk = json_decode($nama1);

// echo "Nama: {$smk->Nama} <br>";
// echo "Askot: {$smk->Askot} <br>";

// echo "Hobi: " . implode(", ", $smk->hobi);






$smk = [
    'Nama' => 'Agung Rohimat',
    'Askot' => 'Bandung'
  ];
  
  echo json_encode($smk);


// $dataJson = "[5, 3, 4, 2, 1]";

// $data = json_decode($dataJson);

// echo implode(" - ", $data);

// $nilaiUjian = [70, 80, 50, 90];

// echo json_encode($nilaiUjian);


// $listMahasiswaJSON = '[
//     { "nama": "Agung Rohimat" },
//     { "nama": "Kidam Kusnandi" },
//     { "nama": "Maudy Mailisa" },
//     { "nama": "Palah Syahrul" }
//   ]';
  
//   $listMahasiswa = json_decode($listMahasiswaJSON);
  
//   foreach ($listMahasiswa as $key => $mahasiswa) {
//     echo "{$key}. Username: {$mahasiswa->nama} <br>";
//   }



// Data 1
// $data [] = array(
//     'no'     => 1,
//     'nama'   => 'Rudi',
//     'alamat' => 'Nganjuk'
// );

// // Data 2
// $data [] = array(
//     'no'     => 2,
//     'nama'   => 'Indah',
//     'alamat' => 'Madiun'
// );

// // Mengencode data menjadi json
// $jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// // Menyimpan data ke dalam anggota.json
// file_put_contents('anggota.json', $jsonfile);


?>