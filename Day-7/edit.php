<?php
require 'koneksi.php';

// ambil data dari url
$id = $_GET["id"];
// query data capster berdasarkan id
$cps = query("SELECT * FROM capsters WHERE id = $id")[0];



// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    // cek apakah data berhasil diedit atau tidak
    if( edit($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil di edit!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal di edit!');
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
    <title>Edit Data capster</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Capster</h1>
        <form action="" method="post">
            <ul>
                <input type="hidden" name="id" value="<?= $cps["id"]; ?>" >
                <li>
                    <label for="nama_capster">Nama Capster</label>
                    <input type="text" name="nama_capster" id="nama_capster" required 
                    value="<?= $cps["nama_capster"] ?>">
                </li>
                <li>
                    <label for="kode_capster">Kode Capster</label>
                    <input type="text" name="kode_capster" id="kode_capster" required
                    value="<?= $cps["kode_capster"] ?>">
                </li>
                <li>
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" required
                    value="<?= $cps["alamat"] ?>">
                </li>
                <li>
                    <label for="no_hp">No HP</label>
                    <input type="text" name="no_hp" id="no_hp" required
                    value="<?= $cps["no_hp"] ?>">
                </li>
                <li>
                    <label for="foto">Foto (nama file)</label>
                    <input type="file" name="foto" id="foto">
                </li>
                <li>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" required
                    value="<?= $cps["jenis_kelamin"] ?>">
                        <option value="">--Pilih--</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </li>
                <li>
                    <button type="submit" name="submit" class="btn">Edit Data</button>
                </li>
            </ul>
        </form>
        <br>
        <a href="index.php" class="btn">Kembali</a>
    </div>
</body>
</html>