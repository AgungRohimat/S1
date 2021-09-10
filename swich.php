<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<H2>Swich Case</H2>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    Masukan Angka
                </td>
                <td>
                    :
                </td>
                <td><input type="text" name="angka" id=""></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="KIRIM"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $angka =$_POST['angka'];

    switch ($angka) {
            case 1:
            echo "Isi Variabel Angka Adalah satu";
            break;

            case 2:
            echo "Isi Variabel Angka Adalah dua";
            break;

            case 3:
            echo "Isi Variabel Angka Adalah tiga";
            break;

            case 4:
            echo "Isi Variabel Angka Adalah empat";
            break;

            case 5:
            echo "Isi Variabel Angka Adalah lima";
            break;

            case 6:
            echo "Isi Variabel Angka Adalah enam";
            break;
        
        default:
            echo "Angka Tidak Ada";
            break;
    }

    
}

?>