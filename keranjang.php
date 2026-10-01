<?php
session_start();
if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$total = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Keranjang Belanja</title>

  <style>
    body {font-family: Arial; background:#f5f5f5; margin:0;}
    header {background:#222; color:white; padding:20px; text-align:center;}
    .box {background:white; width:90%; max-width:500px; margin:20px auto; padding:20px;
      border-radius:10px; box-shadow:0px 0px 10px rgba(0,0,0,0.1);}
    ul {padding-left:20px;}
    button {background:#ff4d6d; color:white; border:none; padding:10px; width:100%;
      border-radius:8px; cursor:pointer; font-weight:bold; margin-top:10px;}
    button:hover {background:#e63950;}
    a {text-decoration:none;}
  </style>
</head>

<body>

<header>
  <h2>Keranjang Belanja</h2>
</header>

<div class="box">
  <h3>Daftar Produk:</h3>

  <ul>
    <?php foreach($cart as $item): ?>
      <li><?php echo $item['nama']; ?> - Rp <?php echo $item['harga']; ?></li>
      <?php $total += $item['harga']; ?>
    <?php endforeach; ?>
  </ul>

  <h3>Total: Rp <?php echo $total; ?></h3>

  <a href="checkout.php"><button>Checkout</button></a>
  <a href="hapus_keranjang.php"><button style="background:#444;">Hapus Keranjang</button></a>
  <a href="index.php"><button style="background:#666;">Kembali ke Toko</button></a>
</div>

</body>
</html>