<?php
// cek apakah tombol submit sudah ditekan
if(isset($_POST["submit"]) ) {

// cek username & password
    if($_POST["username"] == "admin" && $_POST["password"] == "123") {
    
// jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
        
    } else {

        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if( isset($error) ) { ?>
    <p style="color:red; font-style:italic;">username atau password salah</p>
    <?php } ?>
    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username:</label>
            <input type="text" name="username" required>  
        </li>
        <li>
            <label for="password">Password:</label>
            <input type="password" name="password" required>  
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>
    </ul>
</body> 
</html>