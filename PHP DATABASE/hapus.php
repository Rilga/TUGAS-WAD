<?php  
	include_once("koneksi.php");  
	$id		=$_GET['id'];  
	$sql	=mysqli_query($koneksi, "delete from tbl_mahasiswa where id=$id");  
	header("Location:tampil.php");  
?>