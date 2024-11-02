<html>  
    <head>  
        <title>Nama Masing-masing</title>  
    </head>  
    <body>  
        <h> Tambah Data Mahasiswa </h>  
        <hr>  
        <form action="tambah.php" method="post">  
            <table width="00%" border="">  
                <tr>  
                    <td>Masukkan Kelompok</td>  
                    <td>  
                        <input type="text" name="kelompok" size="00%" placeholder="Masukkan Kelompok">  
                    </td>  
                </tr>  
                <tr>  
                    <td>Masukkan Nama Lengkap</td>  
                    <td>  
                        <input type="text" name="nama_lengkap" size="00%" placeholder="Masukkan Nama Lengkap">  
                    </td>  
                </tr>  
                <tr>  
                    <td>Masukkan NIM</td>  
                    <td>  
                        <input type="text" name="nim" size="0%" placeholder="Masukkan NIM">
                    </td>  
                </tr>  
                <tr>  
                    <td>Masukkan Nomor Kontak</td>  
                    <td>  
                        <input type="text" name="nomor_kontak" size="0%" placeholder="Masukkan Nomor Kontak">  
                    </td>  
                </tr>  
                <tr>  
                    <td>Masukkan Email</td>  
                    <td>  
                        <input type="text" name="email" size="0%" placeholder="Masukkan Email">  
                    </td>  
                </tr>  
                <tr>  
                    <td>Masukkan Program Studi</td>  
                    <td>  
                        <input type="text" name="program_studi" size="00%" placeholder="Masukkan Program Studi">  
                    </td>  
                </tr>  
                <tr>  
                    <td colspan="" align="center">  
                        <input type="submit" name="Proses_Submit" value="Tambah Data">  
                    </td>  
                </tr>  
            </table>  
        </form>  
    </body>  
</html>     

<?php  
	include_once ("koneksi.php");  
	
    if(isset($_POST['Proses_Submit'])){  
        $kelompok 		= $_POST['kelompok'];  
        $nama_lengkap 	= $_POST['nama_lengkap'];  
        $nim 			= $_POST['nim'];  
        $email 			= $_POST['email'];  
        $nomor_kontak 	= $_POST['nomor_kontak'];  
        $program_studi 	= $_POST['program_studi'];  

        // Menggunakan variabel $Koneksi sesuai dengan nama yang ada di koneksi.php
        $sql = mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa (kelompok, nama_lengkap, nim, email, nomor_kontak, program_studi) 
                            VALUES ('$kelompok', '$nama_lengkap', '$nim', '$email', '$nomor_kontak', '$program_studi')");           
        
        if ($sql) {
            echo "Mahasiswa berhasil ditambahkan. <a href='tampil.php'>Lihat Data Mahasiswa</a>";  
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($Koneksi);
        }
    } 
?>