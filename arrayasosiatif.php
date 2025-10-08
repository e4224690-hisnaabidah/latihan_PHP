<?php
$produk = [
["nama" => "Suncreen OMG", "harga" => 65000, "stok" => 27],
["nama" => "Suncreen Azarine", "harga" => 45000, "stok" => 12],
["nama" => "Suncreen Amaterasun", "harga" => 52000, "stok" => 8],
];
// Menampilkan semua produk
foreach ($produk as $p) {
echo "Nama: " . $p["nama"] . " | Harga: " . $p["harga"] . " | Stok: " .
$p["stok"] . "<br>";
}
?>