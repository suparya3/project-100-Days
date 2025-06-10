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
    $jenis_kelamin = $data["jenis_kelamin"];
    // upload gambar
    $foto = upload();
    if( !$foto) {
        return false;
    }

    $query = "INSERT INTO capsters
        VALUES
        ('', '$nama_capster', '$kode_capster', '$alamat', '$no_hp', '$foto', '$jenis_kelamin')";    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function upload() {
    $namafile = $_FILES['foto']['name'];
    $ukuranfile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
                </script>";
                return false;
    }
    // cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
           echo "<script>
                alert('yang anda upload bukan gambar!');
                </script>";
                return false;
    }
    // cek jika ukuran terlalu besar
    if( $ukuranfile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
                </script>";
                return false;
    }
    // lolos pengecekan, gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'foto/' . $namaFileBaru);
    return $namaFileBaru;




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
    $jenis_kelamin = $data["jenis_kelamin"];
    $fotoLama = htmlspecialchars($data["fotoLama"]);
    // cek apakah user pilih foto baru atau tidak
    if( $_FILES['foto']['error'] == 4 ) {
        $foto = $fotoLama;
    } else {
        $foto = upload();
        
    }
    
    

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


function search($keyword) {
    $query = "SELECT * FROM capsters
            WHERE
            nama_capster LIKE '%$keyword%' OR
            kode_capster LIKE '%$keyword%' 
            ";
    return query($query);
}

function registrasi($data) {
    global $db;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($db, "SELECT username FROM user WHERE
    username = '$username'");
    if( mysqli_fetch_assoc($result) ){
        echo "<script>
            alert('username sudah terdaftar!')
            </script>";
        return false;
    }


    // cek konfirmasi password
    if( $password !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai !')
            </script>";
            return false;
    }
   
    // enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // tambahkan user baru ke database
    mysqli_query($db, "INSERT INTO user VALUES('','$username', '$password')" );
    return mysqli_affected_rows($db);


}



?>