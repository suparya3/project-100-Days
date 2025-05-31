<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array lagi</title>
    <style>
        .bulat {
            width: 50px;
            height: 50px;
            background-color: gold;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .bulat:hover {
            transform: rotate(360deg);
            border-radius: 50% ;
        }
    </style>
</head>
<body>
<?php
$angka = [1,2,3,4,5,6,7,8,9,10];
?>
<?php foreach ($angka as $a ) : ?>
    <div class="bulat"><?= $a; ?></div>
    <?php endforeach; ?>
    <br>
    <br>
    <br>
    <br>

<?php
$huruf = ["a","b","c","d","e","f","g","h","i","j"];
?>
<?php foreach ($huruf as $h ) : ?>
    <div class="bulat"><?= $h; ?></div>
    <?php endforeach; ?>
    
</body>
</html>