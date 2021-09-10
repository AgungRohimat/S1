<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form biodata</title>
</head>
<body>
<fieldset>
    <legend>BIODATA</legend>
    
    <form method="POST" action="">
    <table  >
        <tr>
            <td>Nama </td>
            <td> :
                <input type="text" name="nama"><br>
        </tr>
        <tr>
        <tr>
            <td>tanggal lahir </td>
            <td> :
        <input type="date" name="tanggal"><br>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:
    <input type="radio" name="jenis" value="aww" >Perempuan
    <input type="radio" name="jenis" value="lalaki" >Laki-Laki
        </tr>
        <tr>
        <td>Agama </td>
            <td> :
                <select name="agama">
                    <option value="islam">islam</option>
                    <option value="hindu">hindu</option>
                    <option value="katolik">katolik</option>
                </select>
        </tr>

        <tr>
            <td>Alamat</td>
            <td> :
        <textarea name="alamat"> </textarea><br>
        </tr>

        <tr>
            <td>Hobi : </td>
            <td>:
            <input type="checkbox" name="hobi[]" value="Basket" >Basket
            <input type="checkbox" name="hobi[]" value="Badminton" >Badminton
            <input type="checkbox" name="hobi[]" value="Bola">Bola
        </tr>
        <tr>
            <td></td>
    
            <td><input type="submit" name="simpan" value="KIRIM"></td>
        </tr>
  
    </table>
    
    </fieldset>

    <?php

       if (isset($_POST['simpan'])){
           $nama = $_POST['nama'];
           $tgl = $_POST['tanggal'];
           $jns = $_POST['jenis'];
           $agm = $_POST['agama'];
           $alm = $_POST['alamat'];
           $hobi = $_POST['hobi'];

           echo "Nama : $nama <br>";
           echo "Tanggal : $tgl<br>";
           echo "Jenis Kelamin : $jns<br>";
           echo "agama : $agm<br>";
           echo "alamat : $alm<br>";
        

           foreach ($hobi as $data) {
               echo "hobi :" . $data;
           }

       }

    ?>
    </form>
    
</body>
</html>