<?php
// Matriks A (3x3)
$A = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);

// Matriks B (3x3)
$B = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);

// Matriks hasil penjumlahan
$C = array();

// Looping untuk penjumlahan
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Cetak hasil dalam bentuk tabel
echo "<h3>Hasil Penjumlahan Matriks A + B :</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>".$C[$i][$j]."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
