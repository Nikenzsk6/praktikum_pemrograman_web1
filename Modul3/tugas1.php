<?php
$saldoAwal = 2000000;
$bunga = 0.03;
$bulan = 11;

$saldoAKhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);
echo "Saldo awal = Rp".$saldoAwal.",- ", "</br>";
echo "Bunga per bulan = ",$bunga , "</br>";
echo "Saldo akhir setelah".$bulan." bulan adalah : Rp.".$saldoAKhir.",-";
?>