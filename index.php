<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location:login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Novel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <h1>TOKO NOVEL</h1>
    <p>novel menarik dan populer </p>
    <a href="logout.php">logout</a>
    <a href="keranjang.php" style="color: white;">keranjang</a>
  </header>

  <main class="produk-container">

    <div class="produk">
    <img src="images/midnightindecember.png" alt="midnightindecember">
    <h2>midnightindecember</h2>
    <p>Rp 100.000</p>
    <a href="tambah_keranjang.php? nama=midnight%20indecember&harga=100.000"></a>
    <button>Beli</button>
    </div>

    <div class="produk">
    <img src="images/malioboroatmidnight.png" alt="malioboroatmidnight">
    <h2>malioboro at midnight</h2>
    <p>Rp 125.000</p>
    <a href="tambah_keranjang.php? nama=malioboro%20atmidnight&harga=125000" ></a>
    <button>Beli</button>
    </div>

    <div class="produk">
    <img src="images/argantara.png" alt="argantara">
    <h2>argantara</h2>
    <p>Rp 110.000</p>
    <a href="tambah_keranjang.php? nama=argan%20tara&harga=110000"></a>
    <button>Beli</button>
    </div>
    
    <div class="produk">
    <img src="images/lautbercerita.png" alt="lautbercerita">
    <h2>laut bercerita</h2>
    <p>Rp 150.000</p>
     <a href="tambah_keranjang.php? nama=laut%20bercerita&harga=150000"></a>
    <button>Beli</button>
    </div>
    
    <div class="produk">
    <img src="images/cantikituluka.png" alt="cantikituluka">
    <h2>cantik itu luka</h2>
    <p>Rp 110.000</p>
    <a href="tambah_keranjang.php? nama=cantik%20ituluka&harga=110000"></a>
    <button>Beli</button>
    </div>
  </main>

  <footer>
    <p>©2026 Toko Novel | Instagram: @tokonovel.id</p>
  </footer>
</body>
</html>