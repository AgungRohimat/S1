<?php 

// Makanan
// Nasi Goreng :10000
// Mie Goreng : 15000
// Aayam Goreng : 20000

// Minuman 
// Air Mineral :8000
// Jus : 12000
// Kopi :14000

$pesanan =  "Air Mineral";
$harga = 10000;
$jumlahpesanan =2;
$total = $harga * $jumlahpesanan;
$diskon = 0.20 * $total;
$totalbayar = $total - $diskon;
$totalbayar1 = $total;

echo "===============Selamat Datang Di Burjonan=============== <br>";

if ($harga == 10000) {


    if ($total < 50000 && $total >= 0) {

        echo "||Jenis Pesanan : Makanan <br> <br>";
        echo "||Nama Pesanan: $pesanan <br>";
        echo "||Harga : $harga <br>";
        echo "||Jumlah : $jumlahpesanan <br>";
        echo "||Total $total <br>";
        echo "||Total Bayar : $totalbayar1 <br>";

    
    }if ($total >= 50000) {
        echo " Jenis Pesanan : Makanan <br> <br>";
        echo "Nama Pesanan: $pesanan <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlahpesanan <br>";
        echo "Total : $total <br>";
        echo "Diskon : $diskon <br>";
        echo "Total Bayar : $totalbayar";
    }
}

elseif ($harga == 15000) {


    if ($total < 50000 && $total >= 0) {

        echo " Jenis Pesanan : Makanan <br> <br>";
        echo "Nama Pesanan: $pesanan <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlahpesanan <br>";
        echo "Total : $total <br>";
        echo "Total Bayar : $totalbayar1 <br>";

    
    }if ($total >= 50000) {
        echo " Jenis Pesanan : Makanan <br> <br>";
        echo "Nama Pesanan: $pesanan <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlahpesanan <br>";
        echo "Total : $total <br>";
        echo "Diskon : $diskon <br>";
        echo "Total Bayar : $totalbayar";
    }
}
    
elseif ($harga == 20000) {


    if ($total < 50000 && $total >= 0) {

        echo " Jenis Pesanan : Makanan <br> <br>";
        echo "Nama Pesanan: $pesanan <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlahpesanan <br>";
        echo "Total : $total <br>";
        echo "Total Bayar : $totalbayar1 <br>";

    
    }if ($total >= 50000) {
        echo " Jenis Pesanan : Makanan <br> <br>";
        echo "Nama Pesanan: $pesanan <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlahpesanan <br>";
        echo "Total : $total <br>";
        echo "Diskon : $diskon <br>";
        echo "Total Bayar : $totalbayar";
    }
}

elseif ($harga == 8000) {


    if ($total < 50000 && $total >= 0) {

        echo " Jenis Pesanan : Minuman <br> <br>";
        echo "Nama Pesanan: $pesanan <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlahpesanan <br>";
        echo "Total : $total <br>";
        echo "Total Bayar : $totalbayar1 <br>";

    
    }if ($total >= 50000) {
        echo " Jenis Pesanan : Makanan <br> <br>";
        echo "Nama Pesanan: $pesanan <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlahpesanan <br>";
        echo "Total : $total <br>";
        echo "Diskon : $diskon <br>";
        echo "Total Bayar : $totalbayar";
    }
}

elseif ($harga == 10000) {


    if ($total < 50000 && $total >= 0) {

        echo " Jenis Pesanan : Minuman <br> <br>";
        echo "Nama Pesanan: $pesanan <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlahpesanan <br>";
        echo "Total : $total <br>";
        echo "Total Bayar : $totalbayar1 <br>";

    
    }if ($total >= 50000) {
        echo " Jenis Pesanan : Makanan <br> <br>";
        echo "Nama Pesanan: $pesanan <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlahpesanan <br>";
        echo "Total : $total <br>";
        echo "Diskon : $diskon <br>";
        echo "Total Bayar : $totalbayar";
    }
}

elseif ($harga == 12000) {


    if ($total < 50000 && $total >= 0) {

        echo " Jenis Pesanan : Minuman <br> <br>";
        echo "Nama Pesanan: $pesanan <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlahpesanan <br>";
        echo "Total : $total <br>";
        echo "Total Bayar : $totalbayar1 <br>";

    
    }if ($total >= 50000) {
        echo " Jenis Pesanan : Makanan <br> <br>";
        echo "Nama Pesanan: $pesanan <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlahpesanan <br>";
        echo "Total : $total <br>";
        echo "Diskon : $diskon <br>";
        echo "Total Bayar : $totalbayar";
    }
}



else {
    "";
}


    

?>