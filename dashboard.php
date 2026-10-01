<?php 
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: aliceblue;
            margin: 0;
        }
        header {
            background: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .box {
            background: white;
            width: 90%;
            max-width: 500px;
            margin: 30px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        a {
            display: block;
            text-decoration: none;
            background: #ff4d6d;
            color: white;
            padding: 12px;
            border-radius: 8px;
            margin: 10px 0;
        }
        a:hover {
            background: #e63950;
        }
    </style>
</head>
<body>

<header>
    <h2>Dashboard Admin</h2>
</header>

<div class="box">
    <h3>Selamat Datang Admin!</h3>
    <p>Pilih Menu:</p>
    <a href="index.php">Masuk Ke Toko</a>
    <a href="keranjang.php">Cek Transaksi</a>
    <a href="logout.php" style="background:#444;">Logout</a>
</div>

</body>
</html>