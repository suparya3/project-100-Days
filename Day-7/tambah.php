<?php
require 'koneksi.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data capster</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-title">Capster App</div>
        <ul>
            <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Dashboard</a></li>
            <li><a href="tambah.php" class="<?= basename($_SERVER['PHP_SELF']) == 'tambah.php' ? 'active' : '' ?>">Tambah Data</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>Tambah Data Capster</h1>
        <form action="" method="post" enctype="multipart/form-data" class="form-capster">
            <ul>
                <li>
                    <label for="nama_capster">Nama Capster</label>
                    <input type="text" name="nama_capster" id="nama_capster" required class="input">
                </li>
                <li>
                    <label for="kode_capster">Kode Capster</label>
                    <input type="text" name="kode_capster" id="kode_capster" required class="input">
                </li>
                <li>
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" required class="input">
                </li>
                <li>
                    <label for="no_hp">No HP</label>
                    <input type="text" name="no_hp" id="no_hp" required class="input">
                </li>
                <li>
                    <label for="foto">Foto (nama file)</label>
                    <input type="file" name="foto" id="foto" class="input">
                </li>
                <li>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" required class="input">
                        <option value="">--Pilih--</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </li>
                <li>
                    <button type="submit" name="submit" class="btn">Tambah Data</button>
                </li>
            </ul>
        </form>
        <br>
        <a href="index.php" class="btn">Kembali</a>
    </div>
</body>
</html>