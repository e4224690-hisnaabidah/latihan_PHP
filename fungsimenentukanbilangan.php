<?php
// Fungsi untuk menentukan bilangan terbesar
function bilanganTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh penggunaan
$bil1 = 95;
$bil2 = 300;

echo "Bilangan pertama: $bil1 <br>";
echo "Bilangan kedua: $bil2 <br>";
echo "Bilangan terbesar adalah: " . bilanganTerbesar($bil1, $bil2);
?>
