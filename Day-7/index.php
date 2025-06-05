<?php
// koneksi ke database
require 'koneksi.php';
$capsters = query("SELECT * FROM capsters");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memulai</title>
</head>
<body>
    <h1>Data capster</h1>
    <a href="tambah.php">Tambah Data Caspter</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Capster</th>
                <th>kode Capster</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Foto</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach( $capsters as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["nama_capster"];?></td>
                <td><?= $row["kode_capster"];?></td>
                <td><?= $row["alamat"];?></td>
                <td><?= $row["no_hp"]?></td>
                <td><img src="foto/<?= $row["foto"];?>" height="100px" width="100px"></td>
                <td><?= $row["jenis_kelamin"];?></td>
                <td>
                    <a href="">Edit</a>|
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data ini ?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>