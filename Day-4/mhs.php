<?php
// $mahasiswa = [["1","Suparya", "24110199", "ariyaharyanto@gmail.com", "teknik informatika"],
//                 ["2","Enuh", "24110196", "enuh@gmail.com", "teknik informatika"],
//                 ["3","Hanam" , "24110198", "hanam@gmail.com","teknik informatika"],
//                 ["4","Radhiv", "24120198", "Radhiv@gmail.com", "teknik informatika"],
// ];
// array associative
// definisinya sama seperti array numerik,kecuali
// key nya adalah string yang kita buat sendiri
$soccer = [
        [
            "NO" => "1",
            "nama_club" => "Real Madrid",
            "nama_stadion" => "Santiago bernabeu",
            "pelatih" => "Carlo Ancelotti",
            "negara" => "Spanyol",
            "liga" => "La Liga",
            "foto" => "rm.jpeg"


            
        ]
        ,
        [
            "NO" => "2",
            "nama_club" => "Manchester United",
            "nama_stadion" => "Old Trafford",
            "pelatih" => "Ruben Amorim",
            "negara" => "Inggris",
            "liga" => "Premier League",
            "foto" => "mu.jpeg"
            
        ]
        ,
        [
            "NO" => "3",
            "nama_club" => "Persib Bandung",
            "nama_stadion" => "Gelora Bandung Lautan Api",
            "pelatih" => "Bojan Hodak",
            "negara" => "Indonesia",
            "liga" => "BRI Liga 1",
            "foto" => "psb.jpeg"
            
        ]
        ,
        [
            "NO" => "4",
            "nama_club" => "Liverpool",
            "nama_stadion" => "Anfield",
            "pelatih" => "Arne Slot",
            "negara" => "Inggris",
            "liga" => "Premier League",
            "foto" => "ipul.jpeg"
            
        ]
        ,
        [
            "NO" => "5",
            "nama_club" => "Chelsea",
            "nama_stadion" => "Stamford Bridge",
            "pelatih" => "Enzo Maresca",
            "negara" => "Inggris",
            "liga" => "Premier League",
            "foto" => "cs.jpeg"
            
        ]
        ,
        [
            "NO" => "6",
            "nama_club" => "Arsenal",
            "nama_stadion" => "Emirates Stadium",
            "pelatih" => "Mikel Arteta",
            "negara" => "Inggris",
            "liga" => "Premier League",
            "foto" => "ars.jpeg"
            
        ]
        ,
        
          
    
    ];
    // echo $mahasiswa[1]["tugas"][2];

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulan Club Bola</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 20px;
        }
        h1{
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: auto;
        }
        th, td{
            border:1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            background-color: #fafafa;
        }
    </style>
</head>
<body>

    <h1>List Club dengan tropy terbanyak</h1>

    
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama club</th>
                <th>Nama stadion</th>
                <th>Pelatih</th>
                <th>Negara</th>
                <th>Liga</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($soccer as $club ) : ?>
        <tr>
            <td><?= $club["NO"]?></td>
            <td><?= $club["nama_club"]?></td>
            <td><?= $club["nama_stadion"]?></td>
            <td><?= $club["pelatih"]?></td>
            <td><?= $club["negara"]?></td>
            <td><?= $club["liga"]?></td>
            <td>
                <img src="foto/<?= $club["foto"]; ?>"
                     alt="<?= $club["foto"]; ?>" width="150px" height="100px">
            </td>
            
        </tr>
        
    
        <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>
