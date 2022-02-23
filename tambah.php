<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Siswa</title>
</head>
<?php
    include 'koneksi.php';
        if(isset($_POST['OK'])) {
            $nama = $_POST['nama'];
            $nis = $_POST['nis'];

            $insertSiswa = "INSERT INTO siswa (nama, nis) VALUE ('$nama', '$nis')";
            $result = mysqli_query($connection, $insertSiswa);

            echo "
                <script>
                    alert('Siswa berhasil ditambahkan!');
                    window.location.replace('home.php');
                </script>
            ";
        }
?>
<body style="max-width: max-content; margin: auto;">
    <h2>Form Tambah</h2>

    <form method="POST">
        <label>Nam : </label>
        <input  type="text" name="nama">
        <label>NIS : </label>
        <input type="text" name="nis">
        <input type="submit" name="OK" value="Tambah">
        <button><a href="home.php">Kembali</a></button>
    </form>
    
</body>
</html>