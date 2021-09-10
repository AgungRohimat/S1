<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>

<form action="" method="post">
    <h1>Data Siswa Kelas XII RPL</h1>
    <table>
        <tr>
            <td>Jumlah Siswa</td>
            <td>:</td>
            <td><input type="text" name="jumlah" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Proses" name="proses"></td>
        </tr>
    </table>
    <br>
</form>


<?php
if (isset($_POST['proses'])) {
    $jumlah = $_POST['jumlah'];
    # code...

?>
    <form action="hasillatihanform2.php" method="post">
        <table>
            <?php
            for ($i=1; $i <= $jumlah ; $i++) { 
                # code...
            
            ?>
            <tr>
                <td></td>
                <td></td>
                <td>Data Siswa Ke - <?php echo $i ?></td>
            </tr>
            <tr>
                <td>Jenis Makanan</td>
                <td>:</td>
                <td><input type="text" name="jenis[]" id=""></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga[]" id=""></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah[]" id=""></td>
        </tr>
        
        <?php
        }
        ?>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Simpan" name="simpan"></td>
        </tr>
        </table>
    </form>
    <?php
}
    ?>
    </center>
    
</body>
</html>



