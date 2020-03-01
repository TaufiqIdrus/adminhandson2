<?php
	$namahost="localhost";
	$namauser="root";
	$password="";
	$namadatabase="handson";

	$koneksi=mysqli_connect($namahost,$namauser,$password,$namadatabase);

	if(!$koneksi){
		die("Koneksi gagal: ".mysqli_connect_error());
	}
?>