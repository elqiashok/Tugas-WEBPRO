<?php
	
	include "koneksi.php";

	//menangkap data yang dikirim oleh form
	$username = $_GET["username"];
	$password = $_GET["password"];
	
	//menyesuaikan data yang masuk
	$data = mysqli_query($conn, "select * from user where username = '".$_POST["username"]."' and password = '".$_POST["password"]."'");
	$cek = mysqli_fetch_assoc($data);
	$bebas = mysqli_query($conn, "select * from user where username= '$username' and password='$password'");
	$cek2 = mysqli_fetch_assoc($bebas);

	session_start();
	if(count($cek2) === 0){
		header("location:index.php");
	}else{
		$_SESSION['user'] = $user;
		$_SESSION['profile'] = $profile;
		header("location:feed.php");
	}

?>
