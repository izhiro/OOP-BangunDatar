<?php 
require "vendor/autoload.php";

use Tugas\BangunDatar\Segitiga;

ob_start();
if (isset($_POST['luas_segitiga'])) {
    $alas = htmlspecialchars($_POST['alas']);
    $tinggi = htmlspecialchars($_POST['tinggi']);
    $segitiga = new Segitiga($alas,$tinggi);
    echo $segitiga->hitungLuas();
}
$luas_segitiga = ob_get_clean();

ob_start();
if (isset($_POST['keliling_segitiga'])) {
    $alas = htmlspecialchars($_POST['alas']);
    $tinggi = htmlspecialchars($_POST['tinggi']);
    $segitiga = new Segitiga($alas,$tinggi);
    $sisiA = htmlspecialchars($_POST['sisiA']);
    $sisiB = htmlspecialchars($_POST['sisiB']);
    $sisiC = htmlspecialchars($_POST['sisiC']);
    $segitiga->setSisiA($sisiA);
    $segitiga->setSisiB($sisiB);
    $segitiga->setSisiC($sisiC);
    echo $segitiga->hitungKeliling();
}
$keliling_segitiga = ob_get_clean();


 ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Segitiga</title>
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
    </style>
</head>
<body>

<form action="" method="POST">
        <center><img src="img/segitiga.jpg" alt="segitiga" width="150px" height="150px"></center>
        <h1 style="padding-top: 30px;">Segitiga</h1>
        <input type="number" name="alas" placeholder="alas">
        <input type="number" name="tinggi" placeholder="tinggi">
        <div>
        <button class="btn-luas" type="submit" name="luas_segitiga">Luas</button>
            
        </div>
<form action="" method="POST">
        <input type="number" name="sisiA" placeholder="sisi A">
        <input type="number" name="sisiB" placeholder="sisi B">
        <input type="number" name="sisiC" placeholder="sisi C">
        <div>
            <button class="btn-keliling" type="submit" name="keliling_segitiga">Keliling</button>
        </div>
        <div><?= $luas_segitiga; ?></div>
        <div><?= $keliling_segitiga; ?></div>
        
        <button class="btn btn-danger container"><a class="btn" href="index.php">Kembali</a></button>
</body>
</html>