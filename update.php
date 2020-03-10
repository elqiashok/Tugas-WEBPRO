<?php
	include "koneksi.php";

	$query = mysqli_query($conn, "UPDATE user SET username = '".$_POST["username"]."', email = '".$_POST["email"]."'");
	$ubah = mysqli_query($conn, "UPDATE profile SET username = '".$_POST["username"]."', name = '".$_POST["name"]."',website = '".$_POST["website"]."', bio = '".$_POST["bio"]."', email = '".$_POST["email"]."', phone_number = '".$_POST["phone"]."', gender = '".$_POST["gender"]."'");
	
	session_start();
	$_SESSION["user"]["username"] = $_POST["username"]; 
	$_SESSION["user"]["email"] = $_POST["email"];
	$_SESSION["profile"] = $_POST;

	header("location: profile.php");
	
?>
