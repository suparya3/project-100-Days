<?php
// variable scope / Lingkup variable
// variable global dan lokal
$x = 10;
function menampilkanx() {
    global $x;
    echo $x;
} 
menampilkanx();
echo "<br>";

?>