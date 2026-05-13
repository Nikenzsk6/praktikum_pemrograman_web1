<?php
$nilai1 = 80;
//If else 
if($nilai1 >= 90 && $nilai1 <= 100){
    $grade = "A";
    $ket = "Baik Sekali";
} elseif ($nilai1 >= 76 && $nilai1 <= 89){
     $grade = "B";
    $ket = "Baik";
}  elseif ($nilai1 >= 60 && $nilai1 <= 75){
     $grade = "C";
    $ket = "Cukup";
}  elseif ($nilai1 >= 50 && $nilai1 <= 59){
     $grade = "D";
    $ket = "Hampir Cukup";
} elseif ($nilai1 >= 0 && $nilai1 <= 49){
     $grade = "B";
    $ket = "Kurang";
}
echo "Cek nilai menggunakan If Else </br>";
echo "Nilai 1 : ", $nilai1 , "</br>";
echo "Grade : ", $grade , "</br>";
echo "Keterangan : ", $ket , "</br>";

//-------------------------------------------
// Switch case
$nilai2 = 95;
switch(true)
{ 
    case ($nilai2 >= 90 && $nilai2 <= 100):
        $grade2 = "A";
        $ket2 = "Baik Sekali";
        break;
    case ($nilai2 >= 76 && $nilai2 <= 89):
        $grade2 = "B";
        $ket2 = "Baik";
        break;
    case ($nilai2 >= 60 && $nilai2 <= 75):
        $grade2 = "C";
        $ket2 = "Cukup";
        break;
    case ($nilai2 >= 50 && $nilai2 <= 59):
        $grade2 = "D";
        $ket2 = "Hampir Cukup";
        break;
    case ($nilai2 >= 0 && $nilai2 <= 49):
        $grade2 = "E";
        $ket2 = "Kurang ";
        break;
}

echo "--------------------------------- </br>";
echo "Cek nilai menggunakan Swict Case </br>";
echo "Nilai 2 : ", $nilai2 , "</br>";
echo "Grade : ", $grade2 , "</br>";
echo "Keterangan : ", $ket2 , "</br>";

?>