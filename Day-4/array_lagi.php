<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array sampai mampus</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: blueviolet;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 75% ;
        }
        .clear{
            clear: both; 
        }
    </style>
</head>
<body>
    <?php
$bulan =    [["januari", "februari"],
            ["maret", "april"],
            ["mei", "juni", "juli"]];
?>
<?php foreach ($bulan as $b ) : ?>
    <?php foreach ( $b as $c) : ?>
        <div class="kotak"><?= $c; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>
    
</body>
</html>

