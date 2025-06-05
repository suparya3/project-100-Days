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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Capster</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama_capster">Nama Capster</label>
                    <input type="text" name="nama_capster" id="nama_capster" required>
                </li>
                <li>
                    <label for="kode_capster">Kode Capster</label>
                    <input type="text" name="kode_capster" id="kode_capster" required>
                </li>
                <li>
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" required>
                </li>
                <li>
                    <label for="no_hp">No HP</label>
                    <input type="text" name="no_hp" id="no_hp" required>
                </li>
                <li>
                    <label for="foto">Foto (nama file)</label>
                    <input type="text" name="foto" id="foto" placeholder="contoh: foto1.jpg">
                </li>
                <li>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" required>
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