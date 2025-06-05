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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Data capster</h1>
        <a href="tambah.php" class="btn">Tambah Data Capster</a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Capster</th>
                    <th>Kode Capster</th>
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
                    <td><?= htmlspecialchars($row["nama_capster"]);?></td>
                    <td><?= htmlspecialchars($row["kode_capster"]);?></td>
                    <td><?= htmlspecialchars($row["alamat"]);?></td>
                    <td><?= htmlspecialchars($row["no_hp"])?></td>
                    <td>
                        <?php if($row["foto"]): ?>
                            <img src="foto/<?= htmlspecialchars($row["foto"]);?>" height="100" width="100">
                        <?php else: ?>
                            <span>Tidak ada foto</span>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($row["jenis_kelamin"]);?></td>
                    <td>
                        <a href="" class="btn">Edit</a>
                        <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn" onclick="return confirm('Yakin ingin menghapus data ini ?');">Hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>