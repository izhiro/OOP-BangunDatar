<?php 
require "vendor/autoload.php";

use Tugas\BangunDatar\Lingkaran;

ob_start();
if (isset($_POST['luas_lingkaran'])) {
    $jari_jari = htmlspecialchars($_POST['jari_jari']);
    $lingkaran = new Lingkaran($jari_jari);
    echo $lingkaran->hitungLuas();
}
$luas_lingkaran = ob_get_clean();

ob_start();
if (isset($_POST['keliling_lingkaran'])) {
    $jari_jari = htmlspecialchars($_POST['jari_jari']);
    $lingkaran = new Lingkaran($jari_jari);
    echo $lingkaran->hitungKeliling();
}
$keliling_lingkaran = ob_get_clean();
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Lingkaran</title>
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
                width: 110px;
                height: 60px;
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
        <center><img src="img/lingkaran.jpg" alt="lingkaran" width="150px" height="150px"></center>
        <h1 style="padding-top: 30px;">Lingkaran</h1>
        <input type="number" name="jari_jari" placeholder="Jari-Jari">
        <div>
            <button class="btn-luas" type="submit" name="luas_lingkaran">Luas</button>
            <button class="btn-keliling" type="submit" name="keliling_lingkaran">Keliling</button>
        </div>
        <div><?= $luas_lingkaran; ?></div>
        <div><?= $keliling_lingkaran; ?></div>
        <button class="btn btn-danger container"><a class="btn" href="index.php">Kembali</a></button>
</body>
</html>
