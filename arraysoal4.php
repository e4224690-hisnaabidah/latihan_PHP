<?php
// Buat array 3x3 berisi angka acak 1–9
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

// Cetak array dalam bentuk matriks tabel berwarna
echo "<h3>Matriks 3x3</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0' style='text-align:center; font-weight:bold;'>";

$total = 0;
foreach ($matriks as $baris) {
    echo "<tr>";
    foreach ($baris as $nilai) {
        $total += $nilai;
        // kasih warna berbeda biar lebih menarik
        echo "<td style='background-color:lightblue;'>" . $nilai . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Cetak total jumlah elemen
echo "<br><b>Jumlah total semua elemen: $total</b>";
?>
