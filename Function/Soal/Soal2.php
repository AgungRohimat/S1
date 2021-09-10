<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>
      <fieldset>
   <legend>Lingkaran</legend>
   <form method="POST" action="">
     <table>
     <tr>
            <td>Masukan Jari</td>
            <td>:
            <input type="text" name="jari"><br>
        </tr>
        <tr>
            <td></td>
    
            <td><input type="submit" name="masuk" value="KIRIM"></td>
        </tr>
        </fieldset>  
     </table>
  
   <?php
   if (isset($_POST['masuk'])) {
       $jari = $_POST['jari'];


       function luas ($jari , $v = 3.14) {

        $luas = $v * $jari * $jari;
        return $luas;
       }

       function kel ($jari , $v = 3.14) {
           $kel = 2 * ($v * $jari);
           return $kel;

       }
       ?>

       jari jari = <?php echo $jari ; ?> <br>
       Keliling = <?php echo luas($jari) ?> <br>
       luas = <?php echo kel($jari) ?> <br>
<?php
   }
   
   ?>


   </form>

    
</body>
</html>