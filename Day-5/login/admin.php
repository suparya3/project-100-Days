<?php
$kontol = $_GET["username"] = "admin"; // Simulasi username yang didapat dari login
$mmk = $_GET["password"] = "123"; // Simulasi password yang didapat dari login


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    <h1>Selamat datang <?= $kontol; ?></h1>

    <a href="login.php">Logout</a>
</body>
</html>