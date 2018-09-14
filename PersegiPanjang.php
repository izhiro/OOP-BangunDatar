<?php
require "vendor/autoload.php";

use Tugas\Tugas;
use Tugas\BangunDatar\BangunDatar;
use Tugas\BangunDatar\PersegiPanjang;



ob_start();
if (isset($_POST['luas_persegi_panjang'])) {
    $panjang = htmlspecialchars($_POST['panjang_persegi_panjang']);
    $lebar = htmlspecialchars($_POST['lebar_persegi_panjang']);
    $persegiPanjang = new PersegiPanjang($panjang,$lebar);
    echo $persegiPanjang->hitungLuas();
}
$luas_persegi_panjang = ob_get_clean();

ob_start();
if (isset($_POST['keliling_persegi_panjang'])) {
    $panjang = htmlspecialchars($_POST['panjang_persegi_panjang']);
    $lebar = htmlspecialchars($_POST['lebar_persegi_panjang']);
    $persegiPanjang = new PersegiPanjang($panjang,$lebar);
    echo $persegiPanjang->hitungKeliling();
}
$keliling_persegi_panjang = ob_get_clean();


 ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Persegi Panjang</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        .btn {
                text-decoration: none;
                color: white;
            }

            .btn:hover {
                color: red;
            }

            .btn-danger {
                width: 107px;
                height: 50px;
            }

            .btn-danger:hover {
                background-color: yellow;
                border-color: yellow ; 
            }
        }
    </style>
</head>
<body>

<form action="" method="POST">
        <center><img src="img/persegipanjang.jpg" width="300px" height="150px"></center>
        <h1 style="padding-top: 30px;">Persegi Panjang</h1>
        <input type="number" name="panjang_persegi_panjang" placeholder="Panjang">
        <input type="number" name="lebar_persegi_panjang" placeholder="Lebar">
        <div>
            <button class="btn-luas" type="submit" name="luas_persegi_panjang">Luas</button>
            <button class="btn-keliling" type="submit" name="keliling_persegi_panjang">Keliling</button>
        </div>
        <div><?= $luas_persegi_panjang; ?></div>
        <div><?= $keliling_persegi_panjang; ?></div>
        <button class="btn btn-danger container"><a class="btn" href="index.php">Kembali</a></button>
    </form>
    
</body>
</html>