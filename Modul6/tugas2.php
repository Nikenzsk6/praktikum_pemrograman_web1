<?php
$data = array("Nadia"=>"70", "Fira"=>"80", "Doni"=>"95", "Riko"=>"75");
echo "<strong>Array 1</strong><br />";
foreach($data as $nama => $skor){
    echo "$nama: $skor"."<br />";
}
echo "<strong>Array 2</strong><br />";
$data2 = array("Nadia"=>"70", "Doni"=>"95");
foreach($data as $nama => $skor){
    echo "$nama: $skor"."<br />";
}

//-----Array_diff------
echo "<br /><strong>1. Fungsi array_diff</strong><br />";
$result = array_diff($data, $data2);
print_r($result);
echo "<br />Penjelasan: array_diff digunakan untuk membandingkan<br />
nilai array. Jika nilai di array pertama tidak ada di array kedua, <br />
maka nilai itu akan diambil.<br />";

//----Array_first atau array_key_fisrt---
echo "<br /><strong>2. Fungsi array_key_first</strong><br />";
$fisrtvalue = array_key_first($data);
echo "Array 1: "; var_dump($fisrtvalue);
echo "<br />Penjelasan: array_key_first digunakan untuk mengambil<br />
nilai pertama array.<br />";

//-------Array_flip------
echo "<br /><strong>3. Fungsi array_flip</strong><br />";
$flip = array_flip($data2);
echo "Array 2: "; print_r($flip);
echo "<br />Penjelasan: array_flip digunakan untuk menukar<br />
posisi antara Key (Indeks) dengan Value (Nilainya).<br />";

//-------Array_flip------
echo "<br /><strong>3. Fungsi array_flip</strong><br />";
$flip = array_flip($data2);
echo "Array 2: "; print_r($flip);
echo "<br />Penjelasan: array_flip digunakan untuk menukar<br />
posisi antara Key (Indeks) dengan Value (Nilainya).<br />";

//-------Array_replace------
echo "<br /><strong>4. Fungsi array_replace</strong><br />";
echo "<strong>Array 1</strong><br />";
foreach($data as $nama => $skor){
    echo "$nama: $skor"."<br />";
}
$data3 = array("Nadia"=>"C", "Fira"=>"B", "Doni"=>"A", "Riko"=>"B");
echo "<strong>Array 3</strong><br />";
foreach($data3 as $nama => $skor){
    echo "$nama: $skor"."<br />";
}
$replace = array_replace($data, $data3);
echo "<br />Array 2: "; var_dump($replace);
echo "<br />Penjelasan: array_replace digunakan untuk menggantikan<br />
elemen yang memiliki kunci (key) yang sama di array pertama..<br />";

//-------Array_sum------
echo "<br /><strong>5. Fungsi array_sum</strong><br />";
echo "Jumlah nilai mahasiswa pada array 1: ".array_sum($data)."
<br />Penjelasan: array_sum digunakan untuk menjumlahkan<br />
Value pada array asosiatif, hanya Valuenya saja yang dijumlahkan,<br />
Key nya tidak.";
?>