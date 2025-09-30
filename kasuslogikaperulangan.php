<?php
$pengeluaran = 500000; // pengeluaran Hisna bulan ini

echo "CONTOH IF ELSE <br>";
if ($pengeluaran <= 2000000) {
    echo "Hisna Hemat (Rp $pengeluaran) <br>";
} else {
    echo "Hisna Boros (Rp $pengeluaran) <br>";
}

echo "<br>CONTOH SWITCH (7 Grade)<br>";
switch (true) {
    case ($pengeluaran <= 500000):
        echo "Grade A - Sangat Hemat <br>";
        break;
    case ($pengeluaran <= 1000000):
        echo "Grade B - Hemat <br>";
        break;
    case ($pengeluaran <= 1500000):
        echo "Grade C - Cukup Hemat <br>";
        break;
    case ($pengeluaran <= 2000000):
        echo "Grade D - Normal <br>";
        break;
    case ($pengeluaran <= 2500000):
        echo "Grade E - Cukup Boros <br>";
        break;
    case ($pengeluaran <= 3000000):
        echo "Grade F - Boros <br>";
        break;
    default:
        echo "Grade G - Boros Sekali <br>";
        break;
}

echo "<br>CONTOH FOR <br>";
for ($bulan = 1; $bulan <= 3; $bulan++) {
    echo "Bulan ke-$bulan: Pengeluaran Hisna Rp " . ($bulan * 500000) . "<br>";
}

echo "<br>CONTOH WHILE <br>";
$minggu = 1;
while ($minggu <= 3) {
    echo "Minggu ke-$minggu: Pengeluaran Rp " . ($minggu * 100000) . "<br>";
    $minggu++;
}
?>
