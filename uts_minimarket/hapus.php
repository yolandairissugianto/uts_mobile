<?php 
    $id = $_GET['id'];
    
    require_once('koneksi.php');
    
    $sql = "DELETE FROM tb_minimarket WHERE id=$id;";

    if(mysqli_query($con,$sql)){
    echo 'Berhasil Menghapus Data';
    }else{
    echo 'Gagal Menghapus Data';
    }
    
    mysqli_close($con);
 ?>