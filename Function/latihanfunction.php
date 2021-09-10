<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Nilai Ujian Kelas 12 RPL</h1>
    <table border="1">
    <tr>
                   
                    <th>Nama</th>
                    <th>MTK</th>
                    <th>B.Inggris</th>
                    <th>B.Indonesia</th>
                    <th>Kejuruan</th>
                     <th>Rata-Rata</th>
                    <th>Status</th>
                    <th>Grade</th>
                </tr>


                <?php


function penjumlahan($nama, $mtk,$inggris,$indo,$kejuruan){
    echo "<th>" . $nama . "</th>";
    echo "<th>" . $mtk . "</th>";
    echo "<th>" . $inggris . "</th>";
    echo "<th>" . $indo . "</th>";
    echo "<th>" . $kejuruan . "</th>"; 
    

    $rata = $mtk + $inggris + $indo + $kejuruan;
    $rata2 = $rata / 4;

      echo "<th>" .  $rata2  . "</th>";
      
      if ($rata2 >= 75 && $rata2 <= 100) {
        echo "<th> Lulus </th>";
        
     }else{
        echo  "<th> Tidak Lulus </th>";
    }
      
      if ($rata2 >= 90 && $rata2 <= 100) {
        echo "<th> A </th>";
    }
    elseif ($rata2 >= 80 && $rata2 <= 89) {
       echo "<th> B </th>";
    }
    elseif ($rata2 >= 75 && $rata2 <= 79) {
       echo "<th> C </th>";
    }
    elseif ($rata2 >= 50 && $rata2 <= 74) {
        echo "<th> D </th>";
    }
    elseif ($rata2 >= 0 && $rata2 <= 49) {
        echo "<th> E <th>";
    }
    
    }
    
    

            penjumlahan("Agung",90,90,90,90,90);


            

                ?>
            </table></center>
</body>
</html>
