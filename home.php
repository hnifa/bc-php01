<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
    <?php
        include 'koneksi.php';
        $dataSiswa = mysqli_query($connection, 'SELECT * FROM siswa');
    ?>
<body style="max-width: max-content; margin: auto;">
    <h1 style="text-align: center;">Data Siswa</h1>
    <button><a href="tambah.php">Tambah</a></button>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Aksi</th>
        </tr>
        <?php while($rows = mysqli_fetch_array($dataSiswa)) { ?>
        <tr>
            <td><?php echo $rows['nama'] ?></td>
            <td><?php echo $rows['nis'] ?></td>
            <td>
                <a href="edit.php?id_siswa=<?php echo $rows['id'] ?>">Edit</a>
                <a href="hapus.php?id_siswa=<?php echo $rows['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>