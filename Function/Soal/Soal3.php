<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
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
    <input type="radio" name="jenis" value="Perempuan" >Perempuan
    <input type="radio" name="jenis" value="Laki-Laki" >Laki-Laki
        </tr>
        <tr>
        <td>Agama </td>
            <td> :
                <select name="agama">
                    <option value="islam">Islam</option>
                    <option value="hindu">Hindu</option>
                    <option value="kristen">Kristen</option>
                    <option value="budha">Budha</option>
                    <option value="konguchu">Konguchu</option>
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
            <input type="checkbox" name="hobi[]" value="basket" >Basket
            <input type="checkbox" name="hobi[]" value="bola" >Bola
            <input type="checkbox" name="hobi[]" value="berenang">Berenang
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

           function biodata($nama,$tgl,$jk,$agama,$alamat,$hobi){
               

           

           echo "Nama : $nama <br>";
           echo "Tanggal : $tgl<br>";
           echo "Jenis Kelamin : $jns<br>";
           echo "Agama : $agm<br>";
           echo "Alamat : $alm<br>";
        

           foreach ($hobi as $data) {
               echo "Hobi :" . $data;
           }
        }
        biodata();

       }

    ?>
    </form>
    
</body>
</html>