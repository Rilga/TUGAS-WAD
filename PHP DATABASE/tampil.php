<?php  
	include_once ("koneksi.php");  
	$sql = mysqli_query($koneksi,"SELECT * FROM tbl_mahasiswa");  
?>  
<html>  
<head>  
	<title>Nama Masing-masing</title>  
</head>  
<body>  
	<h1> Tampil Data Mahasiswa </h1>  
	<hr>  
	<br>  
	<a href="tambah.php">Tambah Data</a>  
	<br>  
	<hr>  
	<br>  
	<table width ="100%" border="1">  
	<tr>  
		<th>ID</th>  
		<th>Kelompok</th>  
		<th>Nama Lengkap</th>  
		<th>NIM</th>  
		<th>Nomor Kontak</th>  
		<th>Email</th>
		<th>Program Studi</th>  
		<th>Aksi</th>  
	</tr>  
<?php  
	while($data=mysqli_fetch_array($sql)){  
		echo "<tr>";  
			echo "<td>".$data['id']."</td>";  
			echo "<td>".$data['kelompok']."</td>";  
			echo "<td>".$data['nama_lengkap']."</td>";  
			echo "<td>".$data['nim']."</td>";  
			echo "<td>".$data['nomor_kontak']."</td>";  
			echo "<td>".$data['email']."</td>";  
			echo "<td>".$data['program_studi']."</td>";  
			echo "<td><a href='ubah.php?id=$data[id]'>Ubah</a> | <a href='hapus.php?id=$data[id]'>Hapus</a></td>";  
		echo "</tr>";  
	}  
?>  
	</table>  
</body>  
</html>