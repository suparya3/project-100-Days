 <?php
//date untuk menampilkn tanggal dan format tertentu
//   echo date("l, d-M-Y");
//time
// unix timestamp/ epoch time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l-M-Y", time()-60*60*24*5);

// mktime
// membuat sendiri detik
//mktime(0,0,0,0,0,0);
//jam,menit,detik,bulan,tanggal,tahun
// echo date( "l", mktime(0,0,0,04,10,2007));

// strtotime
echo date("l", strtotime("10 april 2007"));
?>