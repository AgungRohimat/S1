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
        <a class="nav-link" href="Soal/soal1.php">Penggajihan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Soal/soal2.php">Vaksin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Soal/soal3.php">Pengulangan <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
  </div>
</nav>
<!--Tutup Navbar-->
<br>
<div class ="container">
<div class="card">
  <div class="card-header">
<h1>Penggajihan</h1>
  </div>
  <div class="card-body">
    <!--Buka Form-->
<form>
    <div class = "container">
        <br>
        

  <div class="form-group">
    <label for="exampleInputEmail1">Nama Bendahara :</label>
    <input type="text" class="form-control"  id="" name = "nama">
    <small id="" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Nama Pekerja :</label>
    <input type="text" class="form-control" id="" name = "Pekerja">
  </div>

<label for="exampleInputPassword1">Jenis Kelamin :</label> 
  <div class="form-check form-check-inline">
  
  <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>


  <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Perempuan</label>
</div><br>

<div class="form-group">
    <label for="exampleInputPassword1">Tanggal Gaji:</label>
    <input type="date" name="TanggalGaji" class="form-control" id="" >
  </div>

  <label for="exampleInputPassword1">Jabatan:</label>
  <select class="custom-select" name ="Jabatan">
  <option selected>Jabatan</option>
  <option value="1">Direktur</option>
  <option value="2">Manager</option>
  <option value="3">Kryawan</option>
  <option value="4">OB</option>
</select>

<label for="exampleInputPassword1">Pendidikan: </label>
  <select class="custom-select" name ="Pendidikan">
  <option selected>Pendidikan</option>
  <option value="1">SD</option>
  <option value="2">SMP</option>
  <option value="3">SMK</option>
  <option value="4">S1</option>
</select>

<div class="form-group">
    <label for="exampleInputPassword1">Lembur :</label>
    <input type="text" class="form-control" id="" name = "Lembur">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Potongan :</label>
    <input type="text" class="form-control" id="" name = "Potongan">
  </div>

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

