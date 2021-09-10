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
    <form action="hasillatihanform.php" method="post">
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
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis[]" id=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama[]" id=""></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas[]" id=""></td>
        </tr>
        <tr>
                <td>B.Indonesia</td>
                <td>:</td>
                <td><input type="text" name="indonesia[]" id=""></td>
        </tr>
        <tr>
            <td>B.Inggris</td>
            <td>:</td>
            
            <td> <input type="text" name="inggris[]" id=""></td>
        </tr>
        <tr>
            <td>Matematika</td>
            <td>:</td>
            
            <td> <input type="text" name="mtk[]" id=""></td>
        </tr>
        <tr>
            <td>Produktif</td>
            <td>:</td>
            
            <td> <input type="text" name="produktif[]" id=""></td>
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



