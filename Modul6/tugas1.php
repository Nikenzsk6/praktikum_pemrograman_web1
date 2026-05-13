<?php
//  simpan data asli agar bisa dipanggil ulang
$data_asli = array("Nadia"=>"70", "Fira"=>"80", "Doni"=>"95", "Riko"=>"75");

//Sebelum menggunakan fungsi sort
echo "<strong>Sebelum diurutkan</strong><br />";
foreach($data_asli as $nama => $skor){

    echo "$nama: $skor"."<br />";

}

// --- SORT ---
$nilai = $data_asli;
sort($nilai);
echo "<br /><strong>Setelah diurutkan menggunakan fungsi Sort (Key Hilang)</strong><br />";
$i=0;
foreach($nilai as $nama => $skor){
    echo "Index ke-$i, Nama: $nama, Nilai: $skor<br />";
    $i++;
}

// --- ASORT ---
$nilai = $data_asli; // Reset data
asort($nilai);
echo "<br /><strong>Setelah diurutkan menggunakan fungsi Asort (Value ASC, Key Tetap)</strong><br />";
$i=0;
foreach($nilai as $nama => $skor){
    echo "Index ke-$i, Nama: $nama, Nilai: $skor<br />";
    $i++;
}

// --- KSORT ---
$nilai = $data_asli; // Reset data
ksort($nilai);
echo "<br /><strong>Setelah diurutkan menggunakan fungsi Ksort (Nama A-Z, Key Tetap)</strong><br />";
$i=0;
foreach($nilai as $nama => $skor){
    echo "Index ke-$i, Nama: $nama, Nilai: $skor<br />";
    $i++;
}

// --- RSORT ---
$nilai = $data_asli; // Reset data
rsort($nilai);
echo "<br /><strong>Setelah diurutkan menggunakan fungsi Rsort (Value DESC, Key Hilang)</strong><br />";
$i=0;
foreach($nilai as $nama => $skor){
    echo "Index ke-$i, Nama: $nama, Nilai: $skor<br />";
    $i++;
}

// --- ARSORT ---
$nilai = $data_asli; // Reset data
arsort($nilai);
echo "<br /><strong>Setelah diurutkan menggunakan fungsi Arsort (Value DESC, Key Tetap)</strong><br />";
$i=0;
foreach($nilai as $nama => $skor){
    echo "Index ke-$i, Nama: $nama, Nilai: $skor<br />";
    $i++;
}

// --- KRSORT ---
$nilai = $data_asli; // Reset data
krsort($nilai); 
echo "<br /><strong>Setelah diurutkan menggunakan fungsi Krsort (Nama Z-A, Key Tetap)</strong><br />";
$i=0;
foreach($nilai as $nama => $skor){
    echo "Index ke-$i, Nama: $nama, Nilai: $skor<br />";
    $i++;
}
?>