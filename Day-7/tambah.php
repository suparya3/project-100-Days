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
</head>
<body>
    <h1>Tambah Data Capster</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_capster">Nama Capster</label>
                <input type="text" name="nama_capster" id="nama_capster"required>
                
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
                <label for="no_hp">No Hp</label>
                <input type="text" name="no_hp" id="no_hp" required>
              
            </li>
            <li>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto">
                
            </li>
            <li>
                <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" >
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
    
</body>
</html>