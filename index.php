<?php 

// require "src/BangunDatar/BangunDatar.php";
// require "src/BangunDatar/Persegi.php";
// require "src/BangunDatar/PersegiPanjang.php";
// require "src/BangunDatar/Lingkaran.php";
// require "src/BangunDatar/BelahKetupat.php";
// require "src/BangunDatar/Segitiga.php";

require "vendor/autoload.php";

use Tugas\Tugas;
use Tugas\BangunDatar\BangunDatar;
use Tugas\BangunDatar\Persegi;
use Tugas\BangunDatar\PersegiPanjang;
use Tugas\BangunDatar\Lingkaran;
use Tugas\BangunDatar\BelahKetupat;
use Tugas\BangunDatar\Segitiga;

$persegi = new  Persegi(5);
echo 'Luas Persegi = ' . $persegi->hitungLuas() . "<br>";
echo 'Keliling Persegi = ' . $persegi->hitungKeliling() . "<br> <br>";

$persegiPanjang = new PersegiPanjang(6,4);
echo ' Luas PersegiPanjang = ' . $persegiPanjang->hitungLuas() . "<br>";
echo ' Keliling PersegiPanjang =  ' . $persegiPanjang->hitungKeliling() . "<br> <br>";

$lingkaran = new Lingkaran(7);
echo ' Luas Lingkaran = ' . $lingkaran->hitungLuas() . "<br>"; 
echo ' Keliling Lingkaran = ' . $lingkaran->hitungKeliling() . "<br> <br>";

$belahKetupat = new BelahKetupat(6,7);
echo ' Luas Belah Ketupat = ' . $belahKetupat->hitungLuas() . "<br>";
$belahKetupat->setSisi(6);
echo ' Keliling BelahKetupat = ' . $belahKetupat->hitungKeliling() . "<br> <br>";

$segitiga = new Segitiga(4,5,6);
$segitiga->setAlas(5);
$segitiga->setTinggi(4);
echo ' Luas Segitiga = ' . $segitiga->hitungLuas() . "<br>";
echo ' Keliling Segitiga = ' . $segitiga->hitungKeliling() . "<br> <br>";

echo "<hr>";