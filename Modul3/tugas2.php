<?php
$r = 7;
$t = 24;
$phi = M_PI;
//hitung garis pelukis/ selimut
$s = sqrt(pow($r, 2) + pow($t, 2));

//hitung luas alas
$luasAlas = $phi * pow($r, 2);

//hitung luas permukaan
$luasPermukaan = ($phi * pow($r, 2)) + ($phi * $r * $s);

echo "Jari- jari kerucut = ", $r, "</br>";
echo "Tinggi kerucut = ", $t, "</br>";
echo "Garis pelukis / selimut kerucut = ", $r, "</br>";
echo "Phi = ", $phi, "</br>";
echo "===================================== </br>";
echo "Luas Alas = ", number_format($luasAlas, 2, ',', '.') , "</br>";
echo "Luas Permukaan = ", number_format($luasPermukaan, 2, ',', '.'), "</br>";
?>