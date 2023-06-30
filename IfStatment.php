<?php
$nilai = 90;
$absen = 80;

if ($nilai >= 75 && $absen >= 75) {
    echo "Anda LULUS" . PHP_EOL;
} else {
    echo "anda Tidak LULUS" . PHP_EOL;
}

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}

if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;
endif;


$nilai = "B";

if ($nilai == "A") {
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
} elseif ($nilai == "B" || $nilai == "C") {
    echo "Anda lulus" . PHP_EOL;
} elseif ($nilai == "D") {
    echo "Anda tidak lulus" . PHP_EOL;
} else {
    echo "Mungkin anda salah jurusan" . PHP_EOL;
}
