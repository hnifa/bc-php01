<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data Siswa</title>
</head>
<?php 
    include "koneksi.php";
    $data = mysqli_query($connection, 'SELECT nama, nis FROM siswa WHERE id = '.$_GET['id_siswa']);
    $data = mysqli_fetch_array($data);
?>
<body style="max-width: max-content; margin: auto;">
    <h2>Form Ubah</h2>

    <form method="POST">
        <label>Nama : </label>
        <input type="text" name="nama" value="<?php echo $siswa["nama"]; ?>">
        <label>NIS : </label>
        <input type="text" name="nis" value="<?php echo $siswa["nis"]; ?>">
        <input type="submit" name="OK" value="Ubah">
        <button><a href="home.php">Kembali</a></button>
    </form>
    <?php
        if (isset($_POST['OK'])) {
            $nama = $_POST["nama"];
            $nis = $_POST["nis"];
            $id_siswa = $_GET ['id_siswa'];

            $update = mysqli_query($connection, 
                "UPDATE siswa SET 
                nama = '$nama',
                nis = '$nis' 
                WHERE id = '$id_siswa' ");
            echo "
            <script> 
                alert('Data siswa berhasil diubah!');
                window.location.replace('home.php');
            </script>
            ";
        } 
    ?>
</body>
</html>