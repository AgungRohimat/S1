<?php
    if (isset($_POST['simpan'])) {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $indonesia = $_POST['indonesia'];
        $inggris = $_POST['inggris'];
        $mtk =$_POST['mtk'];
        $produktif =$_POST['produktif'];
        
        
        # code...
    }
    ?>
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
            <h2>Data Kelas XII RPL</h2>
            <table border="1">
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>B.Indonesia</th>
                    <th>B.Inggris</th>
                    <th>MTK</th>
                    <th>Produktif</th>
                    <th>Total Nilai</th>
                    <th>Rata-Rata</th>
                    <th>Grade</th>
                    <th>Status</th>

                </tr>
                
               
                <?php
                for ($i=0; $i <count($nama) ; $i++) { 
                    ?>
                    
                    <tr>
                        <td><?php echo $nis[$i]; ?></td>
                        <td><?php echo $nama[$i]; ?></td>
                        <td><?php echo $kelas[$i]; ?></td>
                        <td><?php echo $indonesia[$i]; ?></td>
                        <td><?php echo $inggris[$i] ?></td>
                        <td><?php echo $mtk[$i] ?></td>
                        <td><?php echo $produktif[$i];  ?></td>
                            <?php $tl = $indonesia[$i] + $inggris[$i] + $mtk[$i] + $produktif[$i]?> 
                        <td><?php echo $tl;?></td>
                        <?php $rata = $tl/4; 
                        if ($rata >= 90 && $rata <= 100) {
                            $grade = " A";
                        }
                        elseif ($rata >= 80 && $rata <= 89) {
                            $grade = " B";
                        }
                        elseif ($rata >= 75 && $rata <= 79) {
                            $grade = " C";
                        }
                        elseif ($rata >= 50 && $rata <= 74) {
                            $grade = " D";
                        }
                        elseif ($rata >= 0 && $rata <= 49) {
                            $grade = " E";
                        }
                        if ($rata >= 75 && $rata <= 100) {
                           $status = "Lulus";
                           
                        }else{
                            $status = "Tidak Lulus";
                        }
                        ?>
                        
                        <td><?php echo $rata;?></td>
                        <td><?php echo $grade;?></td>
                        <td><?php echo $status;?></td>
                
                    </tr>
                <?php
                }
                ?>
            </table>
        </center>
        
    </body>
    </html>