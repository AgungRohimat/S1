<?php

$data = [
    ['jenis'=>"Olahraga",  'cabang'=>[
        ['lomba'=>"Sepak Bola", 'artikel'=>[
            ['judul'=> "Sepak Bola Nasional"],
            ['judul'=>"Sepak Bola Internasional"]
        ]],
        ['lomba'=>"Bulu Tangkis",'artikel'=>[
            ['judul'=>"Bulu Tangkis Nasional"],
            ['judul'=>"Bulu Tangkis Internasional"]
        ]],
        ['lomba'=>"Atletik", 'artikel'=>[
            ['judul'=>"Atletik Bola Nasional"],
            ['judul'=>"Atletik Internasional"]
        ]]
    ]],
    ['jenis'=>"Ekonomi",  'cabang'=>[
        ['lomba'=>"Saham", 'artikel'=>[
            ['judul'=>"Tips Memilih Saham yang Benar  "],
            
        ]],
        ['lomba'=>"Bank", 'artikel'=>[
            ['judul'=>" Fungsi Intermediary Keuangan untuk Penempatan Dana"],
            
        ]],
       
    ]],
    ['jenis'=>"Politik",  'cabang'=>[
        ['lomba'=>"Demokrasi", 'artikel'=>[
            ['judul'=>"Ketum PPP: Demokrasi Bukan Alat untuk Memecah Belah"],
           
        ]],
        ['lomba'=>"Peralihan kekuasaan", 'artikel'=>[
            ['judul'=>"Peralihan Kekuasaan Presiden Dalam Lintasan Sejarah Ketaanegaraan Indonesia"],
            
        ]],
       
    ]],
    
        ];

            echo "Artikel : Detik.com <br>";
            echo "Jenis Berita :";

        foreach($data as $data2){
            echo "<ul>";
            echo "<li>" .$data2['jenis']. "</li>";

            foreach ($data2['cabang'] as $data3){
                echo "<ul>";
                echo "<li>" . $data3['lomba']. "</li>";

                foreach ($data3['artikel'] as $data4){
                    echo "<ul>";
                    echo "<li>" .$data4['judul']. "</li>";
                    echo "</ul>";
                }
                echo "</ul>";
                
            }
            echo "</ul>";
        }

?>