<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal3</title>
</head>
<body>
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

	
	for( $a = $angka ; $a> 0;$a--){
	for($i=1; $i<=$a; $i++){
		echo "";
	}
	for($b=$angka;$b>=$a;$b--){
		echo"*";
	}
	echo"<br> ";
	}
}
?>