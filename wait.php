<?php
$jenis ="Minuman";
$menu = "Jus";
$jumlah = 6;

if ($jenis == "Makanan") {

   if ($menu == "Nasi Goreng") {
       echo "Jenis Pesanan : $jenis <br>";
       echo "Nama Pesanan : $menu <br>";
       $harga = 10000;
       echo "Harga : $harga <br>";
       echo "Jumlah : $jumlah <br>";
       $total = $harga * $jumlah;
       echo "Total : $total <br>";
       
       

       if ($total >= 50000) {
          $diskon = $total * 0.20;
          echo "Diskon 20% : $diskon <br>";
          $total_bayar = $total - $diskon;
          echo "Total Bayar : $total_bayar";
       }

   }
   if ($menu == "Mie Goreng"){
    echo "Jenis Pesanan : $jenis <br>";
    echo "Nama Pesanan : $menu <br>";
    $harga = 15000;
    echo "Harga : $harga <br>";
    echo "Jumlah : $jumlah <br>";
    $total = $harga * $jumlah;
    echo "Total : $total <br>";
    
    

    if ($total >= 50000) {
       $diskon = $total * 0.20;
       echo "Diskon 20% : $diskon <br>";
       $total_bayar = $total - $diskon;
       echo "Total Bayar : $total_bayar";
    }
       
   }
   if ($menu == "Ayam Goreng") {
    echo "Jenis Pesanan : $jenis <br>";
    echo "Nama Pesanan : $menu <br>";
    $harga = 20000;
    echo "Harga : $harga <br>";
    echo "Jumlah : $jumlah <br>";
    $total = $harga * $jumlah;
    echo "Total : $total <br>";
    
    

    if ($total >= 50000) {
       $diskon = $total * 0.20;
       echo "Diskon 20% : $diskon <br>";
       $total_bayar = $total - $diskon;
       echo "Total Bayar : $total_bayar";
    }
   }
   
}













elseif ($jenis == "Minuman"){
    if ($menu == "Air Mineral") {
        echo "Jenis Pesanan : $jenis <br>";
        echo "Nama Pesanan : $menu <br>";
        $harga = 8000;
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlah <br>";
        $total = $harga * $jumlah;
        echo "Total : $total <br>";
        
        
    
        if ($total >= 50000) {
           $diskon = $total * 0.20;
           echo "Diskon 20% : $diskon <br>";
           $total_bayar = $total - $diskon;
           echo "Total Bayar : $total_bayar";
        }
       }

       if ($menu == "Jus") {
        echo "Jenis Pesanan : $jenis <br>";
        echo "Nama Pesanan : $menu <br>";
        $harga = 10000;
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlah <br>";
        $total = $harga * $jumlah;
        echo "Total : $total <br>";
        
        
    
        if ($total >= 50000) {
           $diskon = $total * 0.20;
           echo "Diskon 20% : $diskon <br>";
           $total_bayar = $total - $diskon;
           echo "Total Bayar : $total_bayar";
        }
       }
       if ($menu == "Kopi") {
        echo "Jenis Pesanan : $jenis <br>";
        echo "Nama Pesanan : $menu <br>";
        $harga = 12000;
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlah <br>";
        $total = $harga * $jumlah;
        echo "Total : $total <br>";
        
        
    
        if ($total >= 50000) {
           $diskon = $total * 0.20;
           echo "Diskon 20% : $diskon <br>";
           $total_bayar = $total - $diskon;
           echo "Total Bayar : $total_bayar";
        }
       }
        
}
else {
    echo "Menu Tidak Ada";
}
?>