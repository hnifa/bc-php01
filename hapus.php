<?php
    include "koneksi.php";

    $id_siswa = $_GET["id_siswa"];
    $deleteSiswa = mysqli_query($connection, "DELETE FROM siswa WHERE id = '$id_siswa'");

    echo "
    <script>
        alert('Data siswa berhasil dihapus!');
        window.location.replace('home.php');
    </script>
    ";
?>