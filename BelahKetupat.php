<?php 
require "vendor/autoload.php";

use Tugas\BangunDatar\BelahKetupat;

ob_start();
if (isset($_POST['luas_belah_ketupat'])) {
    $diagonal1 = htmlspecialchars($_POST['diagonal1']);
    $diagonal2 = htmlspecialchars($_POST['diagonal2']);
    $belah_ketupat = new BelahKetupat($diagonal1,$diagonal2);
    echo $belah_ketupat->hitungLuas();
}
$luas_belah_ketupat = ob_get_clean();

ob_start();
if (isset($_POST['keliling_belah_ketupat'])) {
    $diagonal1 = htmlspecialchars($_POST['diagonal1']);
    $diagonal2 = htmlspecialchars($_POST['diagonal2']);
    $sisi = htmlspecialchars($_POST['sisi']);
    $belah_ketupat = new BelahKetupat($diagonal1,$diagonal2);
    $belah_ketupat->setSisi($sisi);
    echo $belah_ketupat->hitungKeliling();
}
$keliling_belah_ketupat = ob_get_clean();

 ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Belah Ketupat</title>
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
    <center><img src="img/belahketupat.png" alt="belahketuapt" width="150px" height="150px"></center>
        <h1 style="padding-top: 30px;">Belah Ketupat</h1>
        <input type="number" name="diagonal1" placeholder="diagonal1">
        <input type="number" name="diagonal2" placeholder="diagonal2">
        <div>
            <button class="btn-luas" type="submit" name="luas_belah_ketupat">Luas</button>
            
        </div>
<form action="" method="POST">
    <input type="number" name="sisi" placeholder="sisi">
    <div>
        <button class="btn-keliling" type="submit" name="keliling_belah_ketupat">Keliling</button>
    </div>
    <div><?= $luas_belah_ketupat; ?></div>
    <div><?= $keliling_belah_ketupat; ?></div>
    <button class="btn btn-danger container"><a class="btn" href="index.php">Kembali</a></button>
</body>
</html>