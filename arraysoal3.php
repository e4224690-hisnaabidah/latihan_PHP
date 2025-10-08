<?php
// Array asosiatif multidimensi berisi produk skincare
$produk = [
    [
        "nama" => "Serum Vitamin C",
        "kategori" => "Skincare",
        "harga" => 120000,
        "rating" => 4.7
    ],
    [
        "nama" => "Moisturizer Aloe Vera",
        "kategori" => "Skincare",
        "harga" => 95000,
        "rating" => 4.5
    ],
    [
        "nama" => "Sunscreen SPF 50",
        "kategori" => "Skincare",
        "harga" => 135000,
        "rating" => 4.8
    ]
];

// Cari produk dengan harga tertinggi
$termahal = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $termahal["harga"]) {
        $termahal = $p;
    }
}

// Cetak hasil
echo "<b>HA Beauty</b> - Produk Skincare<br><br>";
echo "Produk dengan harga tertinggi adalah: <br>";
echo "Nama: <b>" . $termahal["nama"] . "</b><br>";
echo "Kategori: " . $termahal["kategori"] . "<br>";
echo "Harga: Rp " . number_format($termahal["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $termahal["rating"];
?>
