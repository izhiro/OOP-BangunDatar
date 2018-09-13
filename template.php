<html>
<head>
    <meta charset="utf-8">
    <title>Bangun Datar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <h1>Persegi</h1>
        <input type="number" name="sisi" placeholder="Sisi">
        <div>
            <button class="btn-luas" type="submit" name="luas_persegi">Luas</button>
            <button class="btn-keliling" type="submit" name="keliling">Keliling</button>
        </div>

        <?php
        if (isset($_POST['luas_persegi'])) {
            $sisi = (int)htmlspecialchars($_POST['sisi']);
            echo $sisi**2;
        }
        ?>
    </form>
    <form action="" method="POST">
        <h1>Persegi Panjang</h1>
        <input type="number" name="panjang_persegi_panjang" placeholder="Panjang">
        <input type="number" name="lebar_persegi_panjang" placeholder="Lebar">
        <div>
            <button class="btn-luas" type="submit" name="luas_persegi_panjang">Luas</button>
            <button class="btn-keliling" type="submit" name="keliling">Keliling</button>
        </div>

        <?php
        if (isset($_POST['luas_persegi_panjang'])) {
            $panjang = (int)htmlspecialchars($_POST['panjang_persegi_panjang']);
            $lebar = (int)htmlspecialchars($_POST['lebar_persegi_panjang']);
            echo $panjang * $lebar;
        }
        ?>
    </form>
</body>
</html>
