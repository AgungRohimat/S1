<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Latihan</title>
  </head>
  <body>
    
  <form action="" method="post">
  <!--Buka Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Agung</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="soal1.php">Penggajihan <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="soal2.php">Vaksin <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="soal3.php">Pengulangan <span class="sr-only"></span></a>
      </li>
      
    </ul>
  </div>
</nav>
<!--Tutup Navbar-->
<br>
<div class ="container">
<div class="card">
  <div class="card-header">
<h1>Vaksin</h1>
  </div>
  <div class="card-body">
    <!--Buka Form-->
<form>
    <div class = "container">
        <br>
        

  <div class="form-group">
    <label for="exampleInputEmail1">Nama Anda :</label>
    <input type="text" class="form-control"  id="" name = "nama">
    <small id="" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Nama Umur :</label>
    <input type="text" class="form-control" id="" name = "umur">
  </div>


<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Status Vaksin</label>
  <select name ="status" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>--Status Vaksin--</option>
    <option value="Sudah Vaksin">Sudah Vaksin</option>
    <option value="Belum Vaksin">Belum Vaksin</option>

  </select>


  <button type="submit" name="simpan"  class="btn btn-primary">Simpan</button>
</div>
</form>
<!--Tutup Form-->
  </div>
</div>
</div>





</Form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>




<?php
if (isset($_POST['simpan'])) {
    $nama =$_POST['nama'];
    $umur =$_POST['umur'];
    $status =$_POST['status'];
 echo "<center>";
 echo "<table>";
    
if ($umur < 12 && $umur >= 0) {
    echo "<tr>";
    echo "<td>TIDAK BISA MASUK</td>";
    echo "</tr>";
    
}
elseif ($umur >= 12 && $umur<=50) {
    if ($status == "Sudah Vaksin") {
        echo "<tr>";
        echo "<td>Nama Anda </td>";
        echo "<td> :</td>";
        echo "<td>$nama </td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Umura </td>";
        echo "<td> :</td>";
        echo "<td>$umur </td>";
        echo "</tr>";

         echo "<tr>";
        echo "<td>Status Vaksin </td>";
        echo "<td> :</td>";
        echo "<td>$status </td>";
        echo "</tr>";
             
        echo "<tr>";
        
        echo "<td><b><h2><i>Silakan Masuk</i></h2><b> </td>";
        echo "</tr>";

            
    } if ($status == "Belum Vaksin") {
        echo "<center><b><i>Tidak Diizinkan</i></b> </center>";
       echo "<a href=https://pedulilindungi.id>Silakan Daftar Vaksin</a>";
    }
}else {
    echo "<b><i><h2>Tidak Bisa Masuk</h2></b></i>";
    echo "</table>";
    echo "</center>";

}
}
?>

<?php
if (isset($_POST['Simpan'])) {
    $nama =$_POST['nama'];
    $umur =$_POST['umur'];
    $status =$_POST['status'];
 echo "<center>";
 echo "<table>";
    
if ($umur < 12 && $umur >= 0) {
    echo "<tr>";
    echo "<td>TIDAK BISA MASUK</td>";
    echo "</tr>";
    
}
elseif ($umur >= 12 && $umur<=50) {
    if ($status == "Sudah Vaksin") {
        echo "<tr>";
        echo "<td>Nama Anda </td>";
        echo "<td> :</td>";
        echo "<td>$nama </td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Umura </td>";
        echo "<td> :</td>";
        echo "<td>$umur </td>";
        echo "</tr>";

         echo "<tr>";
        echo "<td>Status Vaksin </td>";
        echo "<td> :</td>";
        echo "<td>$status </td>";
        echo "</tr>";
             
        echo "<tr>";
        
        echo "<td><b><h2><i>Silakan Masuk</i></h2><b> </td>";
        echo "</tr>";

            
    } if ($status == "Belum Vaksin") {
        echo "<center><b><i>Tidak Diizinkan</i></b> </center>";
       echo "<a href=https://pedulilindungi.id>Silakan Daftar Vaksin</a>";
    }
}else {
    echo "<b><i><h2>Tidak Bisa Masuk</h2></b></i>";
    echo "</table>";
    echo "</center>";

}
}
?>