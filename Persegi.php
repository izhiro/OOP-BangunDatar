<?php  

require "vendor/autoload.php";


use Tugas\BangunDatar\Persegi;


ob_start();
if (isset($_POST['luas_persegi'])) {
    $sisi = htmlspecialchars($_POST['sisi']);
    $persegi = new Persegi($sisi);
    echo $persegi->hitungLuas();
}
$luaspersegi = ob_get_clean();

ob_start();
if (isset($_POST['keliling_persegi'])) {
    $sisi = htmlspecialchars($_POST['sisi']);
    $persegi = new Persegi($sisi);
    echo $persegi->hitungKeliling();
}
$kelilingpersegi = ob_get_clean();

 ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Persegi</title>
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
        <center><img src="img/persegi.png" alt="persegi" width="150px" height="150px"></center>
        <h1 style="padding-top: 30px;">Persegi</h1>
        <input type="number" name="sisi" placeholder="Sisi">
        <div>
            <button class="btn-luas" type="submit" name="luas_persegi">Luas</button>
            <button class="btn-keliling" type="submit" name="keliling_persegi">Keliling</button>
        </div>
        <div><?= $luaspersegi; ?></div>
        <div><?= $kelilingpersegi; ?></div>
        <button class="btn btn-danger container"><a class="btn" href="index.php">Kembali</a></button>
    </form>
 
</body>
</html>
