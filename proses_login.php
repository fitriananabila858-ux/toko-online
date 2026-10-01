<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "18022009") {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
    exit;
} else {
    echo "<h2>Login gagal! Username atau Password salah.</h2>";
    echo "<a href='login.php'>Kembali ke Login</a>";
}
?>