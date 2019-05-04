<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		// $id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		
		$sql = "INSERT INTO tb_minimarket (nama,alamat) VALUES ('$nama','$alamat')";
		
		require_once('koneksi.php');
		
		if(mysqli_query($con,$sql)){
		echo 'Berhasil Menambahkan Data';
		}else{
		echo 'Gagal Menambahkan Data';
		}
		
		mysqli_close($con);
	}
?>