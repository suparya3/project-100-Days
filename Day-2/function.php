<?php
function salam($nama = "Admin")
{
    $jam = date("h");
    if ($jam >=5 && $jam < 12){
        $waktu = "pagi";
    }else if ($jam >=5 && $jam < 15){
        $waktu = "siang";
    }else if ($jam >= 5 && $jam < 18){
        $waktu = "sore";
    }else {
        $waktu = "malam";
    }
    return "selamat $waktu $nama";
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
    <h1><?= salam("Suparya");?></h1>
    
</body>
</html>