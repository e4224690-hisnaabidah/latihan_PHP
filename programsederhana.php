<?php
// Matriks A (5x5)
$A = array(
    array(1, 2, 3, 4, 1),
    array(2, 3, 4, 1, 2),
    array(3, 4, 1, 2, 3),
    array(4, 1, 2, 3, 4),
    array(1, 2, 3, 4, 1)
);

// Matriks B (5x5)
$B = array(
    array(4, 3, 2, 1, 4),
    array(3, 2, 1, 4, 3),
    array(2, 1, 4, 3, 2),
    array(1, 4, 3, 2, 1),
    array(4, 3, 2, 1, 4)
);

// Matriks hasil penjumlahan
$C = array();

// Looping untuk penjumlahan
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Cetak hasil
echo "<h3>Hasil Penjumlahan Matriks A + B :</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
for ($i = 0; $i < 5; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 5; $j++) {
        echo "<td>".$C[$i][$j]."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
