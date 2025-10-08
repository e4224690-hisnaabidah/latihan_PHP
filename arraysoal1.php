<?php
// Membuat array 2 dimensi
$siswa = [
    ["Elfa Nur Saida", 85, 90],     // [Nama, Nilai Matematika, Nilai Bahasa]
    ["Hisna Abidah", 78, 88],
    ["Aisya Latifah", 92, 95]
];

// Cetak nilai Bahasa dari siswa ke-2 (indeks 1)
echo "Nilai Bahasa dari siswa ke-2 (" . $siswa[1][0] . ") adalah: " . $siswa[1][2] . "<br><br>";

// Cetak semua data menggunakan looping
echo "Daftar Nilai Siswa:<br>";
foreach ($siswa as $data) {
    echo "Nama: " . $data[0] . " | Nilai Matematika: " . $data[1] . " | Nilai Bahasa: " . $data[2] . "<br>";
}
?>
