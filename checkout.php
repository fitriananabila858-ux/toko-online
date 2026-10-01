<?php
session_start();
if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>

  <style>
    body {font-family: Arial; background:#f5f5f5; text-align:center; padding-top:50px;}
    .box {background:white; display:inline-block; padding:30px; border-radius:10px;
      box-shadow:0px 0px 10px rgba(0,0,0,0.1);}
    a {display:inline-block; margin-top:15px; text-decoration:none; background:#ff4d6d;
      color:white; padding:10px 20px; border-radius:8px;}
  </style>
</head>

<body>

<div class="box">
  <h2>Checkout Berhasil!</h2>
  <p>Terima kasih sudah belanja di Toko Novel.</p>

  <a href="index.php">Kembali ke Toko</a>
</div>

</body>
</html>