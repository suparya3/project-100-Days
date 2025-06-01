<?php
// superglobals
// variable global milik php
// merupakan array associative
$soccer = [
        [
            "nama_club" => "Real Madrid",
            "nama_stadion" => "Santiago bernabeu",
            "pelatih" => "Carlo Ancelotti",
            "negara" => "Spanyol",
            "liga" => "La Liga",
            "foto" => "rm.jpeg"
        ]
        ,
        [
            "nama_club" => "Manchester United",
            "nama_stadion" => "Old Trafford",
            "pelatih" => "Ruben Amorim",
            "negara" => "Inggris",
            "liga" => "Premier League",
            "foto" => "mu.jpeg"
        ]
        ,
        [
            "nama_club" => "Ac Milan",
            "nama_stadion" => "San Siro",
            "pelatih" => "Massimiliano Allegri",
            "negara" => "Italia",
            "liga" => "Serie A",
            "foto" => "ars.jpeg"
            
        ]
        ,
        
          
    
    ];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seterah</title>
</head>
<body>
    <ul>
    <h1>List Club Bola</h1>
        <?php foreach($soccer as $c) : ?>
            <li>
                <a href="get2.php?nama_club=<?= $c["nama_club"]; ?>&nama_stadion=<?= $c["nama_stadion"]; ?>&pelatih=<?= $c["pelatih"] ; ?>&negara=<?= $c["pelatih"] ; ?>&negara=<?= $c["negara"] ; ?>&liga=<?= $c["liga"] ; ?>&foto=<?= $c["foto"]; ?>"><?= $c["nama_club"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>