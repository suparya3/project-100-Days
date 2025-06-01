<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama_club"]) || 
    !isset($_GET["nama_stadion"]) ||
    !isset($_GET["pelatih"]) ||
    !isset($_GET["negara"]) ||
    !isset($_GET["liga"]) ||
    !isset($_GET["foto"]) ) {
    // redirect
    header("Location: get1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Club pemain bola</title>
</head>
<body>
    <ul>
        
        <li><?= $_GET["nama_club"]; ?></li>
        <li><?= $_GET["nama_stadion"]; ?></li>
        <li><?= $_GET["pelatih"]; ?></li>  
        <li><?= $_GET["negara"]; ?></li>
        <li><?= $_GET["liga"]; ?></li>
        <li><img src="foto/<?= $_GET["foto"]; ?>"></li>
    </ul>
    <a href="get1.php">Kembali ke Halaman utama</a>
    
</body>
</html>