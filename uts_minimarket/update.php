<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		
		require_once('koneksi.php');
		
		$sql = "UPDATE tb_minimarket SET nama = '$nama', alamat = '$alamat' WHERE id = $id;";
		
		if(mysqli_query($con,$sql)){
		echo 'Berhasil Update Data';
		}else{
		echo 'Gagal Update Data';
		}
		
		mysqli_close($con);
	}
?>