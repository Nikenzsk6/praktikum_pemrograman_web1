<?php
// Mengambil nomor bulan saat ini (1 untuk Januari, 12 untuk Desember)
$bulan = date('n');

// Mengambil nama bulan untuk tampilan 
$namaBulan = date('F');

// Mengambil tahun saat ini 
$tahun = date('Y');

switch ($bulan) {
    case 1:  // Januari
    case 3:  // Maret
    case 5:  // Mei
    case 7:  // Juli
    case 8:  // Agustus
    case 10: // Oktober
    case 12: // Desember
        $jumlahHari = 31;
        break;

    case 4:  // April
    case 6:  // Juni
    case 9:  // September
    case 11: // November
        $jumlahHari = 30;
        break;

    case 2:  // Februari
        // Cek apakah tahun kabisat
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            $jumlahHari = 29;
        } else {
            $jumlahHari = 28;
        }
        break;

    default:
        $jumlahHari = "Bulan tidak valid";
        break;
}

echo "Bulan ini adalah <strong>$namaBulan</strong> $tahun <br />";
echo "Jumlah hari dalam bulan ini adalah: <strong>$jumlahHari hari</strong>.";
?>