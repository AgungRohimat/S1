<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal2</title>
</head>
<body>
    <center>
<form action="" method="post">
        <table>
            

        <tr>
                <td>Nama Anda</td>
                    
                <td>
                    :
                </td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Umur</td>
                    
                <td>
                    :
                </td>
                <td><input type="text" name="umur" id=""></td>
            </tr>
            <tr>
            <td>Status Vaksin</td>
             <td>:</td>
                <td> <select name ="status"> 
                <option ></option>
                <Option>Sudah Vaksin</Option>
                <Option> Belum Vaksin</Option>
                </select>
        </tr>
            
            <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="KIRIM"></td>
            </tr>
        </table>
    </form></center>
</body>
</html>


<?php
if (isset($_POST['simpan'])) {
    $nama =$_POST['nama'];
    $umur =$_POST['umur'];
    $status =$_POST['status'];
 echo "<center>";
 echo "<table>";
    

    if ($umur <= 17 && $umur >= 0) {
        echo "<tr>";
        echo "<td> Nama Anda</td>";
        echo "<td> :</td>";
        echo "<td>$nama </td>";
        echo "</tr>";
       
    echo "Umur : $umur<br>";
    echo "Status Vaksin : $status<br>";
         if ($status == "Sudah Vaksin") {
            echo "<center><b>Tidak Diizinkan</b> </center>";
         }
         if ($status == "Belum Vaksin") {
            echo "<center><b>Tidak Diizinkan</b> </center>";
            echo "<a href=https://pedulilindungi.id>Silakan Daftar Vaksin</a>";
         }
    }
    elseif ($umur > 17 && $umur <=120) {
        echo "Nama Anda : $nama<br>";
        echo "Umur : $umur<br>";
        echo "Status Vaksin : $status<br>";
             if ($status == "Sudah Vaksin") {
                 echo "Silakan Masuk<br>";
             }
             if ($status == "Belum Vaksin") {
                 echo "<center><b>Tidak Diizinkan</b> </center>";
                echo "<a href=https://pedulilindungi.id>Silakan Daftar Vaksin</a>";
             }
    }
    echo "</table>";
    echo "</center>";

}
?>