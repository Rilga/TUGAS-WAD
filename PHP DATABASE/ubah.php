<?php
include_once("koneksi.php");

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);
    
    echo "ID dari URL: " . $id . "<br>";
    
    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa WHERE id=$id");
    
    if ($sql && mysqli_num_rows($sql) > 0) {
        $data = mysqli_fetch_array($sql);

        $kelompok = $data['kelompok'];
        $nama_lengkap = $data['nama_lengkap'];
        $nim = $data['nim'];
        $nomor_kontak = $data['nomor_kontak'];
        $email = $data['email'];
        $program_studi = $data['program_studi'];
    } else {
        echo "Data tidak ditemukan untuk ID = $id";
        exit;
    }

    if (isset($_POST['UbahData'])) {
        $kelompok = $_POST['kelompok'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $nim = $_POST['nim'];
        $nomor_kontak = $_POST['nomor_kontak'];
        $email = $_POST['email'];
        $program_studi = $_POST['program_studi'];

        // Query untuk meng-update data
        $update_sql = mysqli_query($koneksi, "UPDATE tbl_mahasiswa SET kelompok='$kelompok', nama_lengkap='$nama_lengkap', nim='$nim', nomor_kontak='$nomor_kontak', email='$email', program_studi='$program_studi' WHERE id=$id");

        if ($update_sql) {
            header("Location: tampil.php");
            exit;
        } else {
            echo "Gagal memperbarui data.";
        }
    }
} else {
    // Pesan error jika 'id' tidak ditemukan di URL
    echo "ID tidak ditemukan. Silakan akses halaman ini melalui daftar data.";
    exit;
}
?>

<!-- Form HTML untuk mengubah data -->
<form method="POST" action="">
    <table width="100%" border="1">
        <label>Masukkan Kelompok</label>
        <tr>
            <td>Masukkan Kelompok</td>
            <td>
                <input type="text" name="kelompok" value="<?php echo isset($kelompok) ? $kelompok : ''; ?>"><br>
            </td>
        </tr>
        <tr>  
            <td>Masukkan Nama Lengkap</td>  
            <td>  
                <input type="text" name="nama_lengkap" value="<?php echo isset($nama_lengkap) ? $nama_lengkap : ''; ?>"><br>  
            </td>  
        </tr>  
        <tr>  
            <td>Masukkan NIM</td>  
            <td>  
                <input type="text" name="nim" value="<?php echo isset($nim) ? $nim : ''; ?>"><br>  
            </td>
        </tr>  
        <tr>  
            <td>Masukkan Nomor Kontak</td>  
            <td>  
                <input type="text" name="nomor_kontak" value="<?php echo isset($nomor_kontak) ? $nomor_kontak : ''; ?>"><br> 
            </td>  
        </tr>  
        <tr>  
            <td>Masukkan Email</td>  
            <td>  
                <input type="text" name="email" value="<?php echo isset($email) ? $email : ''; ?>"><br> 
            </td>  
        </tr>  
        <tr>  
            <td>Masukkan Program Studi</td>  
            <td>  
                <input type="text" name="program_studi" value="<?php echo isset($program_studi) ? $program_studi : ''; ?>"><br>
            </td>  
        </tr>  
        <tr>  
            <td colspan="" align="center">  
                <input type="submit" name="UbahData" value="UbahData">
            </td>  
        </tr>  
    </table>  
</form>
