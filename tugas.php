<?php
// ================================
// Jawaban Tugas Pemrograman PHP
// Atas Nama: Hisna Abidah
// ================================

// Bagian 1: String dengan kutip bisa berubah jadi angka
$a = "10";
$b = "20";
echo "Penjumlahan string berisi angka: $a + $b = " . ($a + $b);
echo "<br><br>";

// Bagian 2: Perbedaan operator / dan %
echo "10 / 3 = " . (10 / 3); // hasil bagi
echo "<br>";
echo "10 % 3 = " . (10 % 3); // sisa bagi
echo "<br><br>";

// Bagian 3: Gabungan string
$tugas1 = 90;
$tugas2 = 80;
$gabungan = $tugas1 . $tugas2;
echo "Hasil penggabungan string tugas1 dan tugas2 = " . $gabungan;
echo "<br><br>";

// Soal string dari materi
$string1 = 'Ini adalah string sederhana';
$string2 = 'Ini adalah
string yang bisa
memiliki beberapa
baris';
$string3 = 'Dia berkata: "I\'ll be back"';
$string4 = 'Anda telah berhasil menghapus C:\\xampp\\htdoc';
$string5 = 'Kalimat ini tidak akan pindah ke: \n baris baru';
$string6 = 'Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";
echo $string4; echo "<br>";
echo $string5; echo "<br>";
echo $string6; echo "<br>";
?>
