<?php  
//array
// adalah sebuah variable yang bisa menampung banyak nilai sekaligus
// elemen pada array bisa memiliki tipe data yang berbeda-beda
// pasangan antara key dan value
// key nya adalah index dimulai dari 0
// membuat array
// // cara lama
$hari = array("senin", "selasa", "rabu");
// // cara baru
$bulan = ["januari", "february", "maret",];



// // menampilkan array
// // var_dump()/ print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo  "<br>";
// // menampilkan 1 element pada array
// echo $hari[2];
// echo "<br>";
// echo $bulan[0];

// menambahkan element baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);



?>