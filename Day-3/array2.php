<?php
// pengulangan pada array
// for / foreach
$bulan = ["januari", "februari","maret", "april", "mei", "juni", "juli"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
        width: 50px;
        height: 50px;
        background-color: blueviolet;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
        }
        .clear { clear: both; }

    </style>
</head>
<body>
    <!-- penulisan dengan for -->
    <?php for ($a = 0; $a < count($bulan); $a++ ) {?>
        <div class="kotak"><?php echo $bulan[$a]; ?></div>
    
    <?php }?>
    <div class="clear"></div>
<!-- penulisan dengan foreach -->
    <?php foreach( $bulan as $b) { ?>
        <div class="kotak"> <?php echo $b; ?></div>
    <?php } ?>

    <div class="clear"></div>
    <!-- penulisan dengan foreach dengan simple -->
    <?php foreach( $bulan as $b) : ?>
        <div class="kotak"><?= $b; ?></div>
        <?php endforeach ?>
    
    
</body>
</html>
