<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("Location:login.php");
	exit;
}
 $nama=$_GET['nama'];
 $harga=$_GET['harga'];
 if (!isset($_SESSION['cart'])) {
 	$_SESSION['cart']=[];
 }
 $_SESSION['cart'][]=[
 	"nama"=>$nama,
 	"harga"=>$harga
 ];
 header("Location:index.php");
 exit;
?>