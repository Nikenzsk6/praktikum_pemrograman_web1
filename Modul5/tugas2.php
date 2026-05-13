<?php
$bil = 2;
$hasil = 0;
while ($bil <= 50){
    $sebelumnya = $hasil;
    $hasil = $hasil+$bil;
    echo "$sebelumnya + $bil = $hasil <br/>";
    $bil++;
}
?>