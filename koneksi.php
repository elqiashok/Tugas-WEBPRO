<?php
	$conn = mysqli_connect("localhost","root","","instagram"); 
	
	//Check connection
	if(mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_errno();
	}
?>