<?php
$lmb = 158;
$harga;

if ($lmb < 100){
    $harga = 150;
} elseif ($lmb >= 100 && $lmb <= 200){
    $harga = 100;
} elseif ($lmb >= 200){
    $harga = 80;
}

$total = $lmb * $harga;

echo "Jumlah lembar fotocopy : ".$lmb. "</br>";
echo "Jumlah harga per lembar fotocopy : Rp.".$harga. "</br>";
echo "Total biaya fotocopy : Rp.".$total;
?>