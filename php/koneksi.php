<?php
	$namahost="localhost";
	$namauser="root";
	$password="";
	$namadatabase="handson";

	$koneksi_cla=mysqli_connect($namahost,$namauser,$password,$namadatabase);

	if(!$koneksi_cla){
		die("Koneksi gagal: ".mysqli_connect_error());
	}
?>