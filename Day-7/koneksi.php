<?php
$db = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $db;
    $nama_capster = htmlspecialchars($data["nama_capster"]);
    $kode_capster = htmlspecialchars($data["kode_capster"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $foto = htmlspecialchars($data["foto"]);
    $jenis_kelamin = $data["jenis_kelamin"];

    $query = "INSERT INTO capsters
        VALUES
        ('', '$nama_capster', '$kode_capster', '$alamat', '$no_hp', '$foto', '$jenis_kelamin')";    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM capsters WHERE id = $id");
    return mysqli_affected_rows($db);
}


function edit($data){
    global $db;
    $id = $data["id"];
    $nama_capster = htmlspecialchars($data["nama_capster"]);
    $kode_capster = htmlspecialchars($data["kode_capster"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $foto = htmlspecialchars($data["foto"]);
    $jenis_kelamin = $data["jenis_kelamin"];

    $query = "UPDATE capsters SET
                nama_capster = '$nama_capster',
                kode_capster = '$kode_capster',
                alamat = '$alamat',
                no_hp = '$no_hp',
                foto = '$foto',
                jenis_kelamin = '$jenis_kelamin'
              WHERE id = $id";    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}



?>