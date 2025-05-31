<?php
$mahasiswa = [
    ["Suparya", "24110199", "Teknik Informatika", "S1"],
    ["Enuh", "24110196", "Teknik Informatika", "D3"],
    ["Fatur", "24110198", "Teknik Informatika", "S3"],
    ["Radhiv", "24120198", "Teknik Informatika", "S2"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>

    </style>
</head>
<body>
    <!-- <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs ) :?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul> -->
    <br>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs): ?>
    <ul>
        <li>Nama :<?= $mhs[0]; ?></li>
        <li>NIM :<?= $mhs[1]; ?></li>
        <li>Jurusan :<?= $mhs[2]; ?></li>
        <li>Prodi :<?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>