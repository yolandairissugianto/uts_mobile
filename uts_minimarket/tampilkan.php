<?php 
	require_once('koneksi.php');
	
	$sql = "SELECT * FROM tb_minimarket";
	
	$r = mysqli_query($con,$sql);
	
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		array_push($result,array(
		"id"=>$row['id'],
        "nama"=>$row['nama'],
        "alamat"=>$row['alamat']
		));
	}
	
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>