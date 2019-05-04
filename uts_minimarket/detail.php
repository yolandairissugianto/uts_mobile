<?php 
    $kode = $_GET['kode'];
	
	require_once('koneksi.php');
	
	$sql = "SELECT * FROM tb_minimarket WHERE id=$id";
	
	$r = mysqli_query($con,$sql);
	
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
		"id"=>$row['id'],
		"nama"=>$row['nama'],
		"alamat"=>$row['alamat'],
		));
 
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>