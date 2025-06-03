<?php
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari table capsters / query data mahasiswa
$result = mysqli_query($db, "SELECT * FROM capsters");

// ambil data capsters (fetch) dari object result //disarankan
// mysqli_fetch_row() // mengembalikan array numerik // disarankan
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan array numerik dan associative tapi data yang disajikan double
// mysqli_fetch_object()

while( $cps = mysqli_fetch_array($result) ) {
var_dump($cps["nama_capster"]); 

}
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
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Capster</th>
                <th>kode Capster</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="">Edit</a>|
                    <a href="">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>