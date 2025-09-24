<?php
// ==================== KASUS 1 ====================
// ==================== CEK STOK SUNSCREEN ====================
$stokProduk = 15;        
$jumlahPesan = 2;        
$hargaProduk = 65000;    

if ($stokProduk <= 0) {
    echo "❌ Stok sunscreen habis.<br>";
    exit;
} elseif ($jumlahPesan > $stokProduk) {
    echo "❌ Jumlah pesanan melebihi stok. Sisa hanya $stokProduk pcs.<br>";
    exit;
} else {
    echo "✅ Sunscreen tersedia, Anda memesan $jumlahPesan pcs.<br>";
}

echo "<hr>";

// ==================== KASUS 2 ====================
// ==================== CEK JENIS KULIT ====================
$jenisKulit = "sensitif"; // pilihan: kering, berminyak, sensitif

if ($jenisKulit == "kering") {
    $spf = 30;
    echo "Rekomendasi: Gunakan sunscreen SPF $spf untuk kulit kering.<br>";
} elseif ($jenisKulit == "berminyak") {
    $spf = 40;
    echo "Rekomendasi: Gunakan sunscreen SPF $spf untuk kulit berminyak.<br>";
} elseif ($jenisKulit == "sensitif") {
    $spf = 50;
    echo "Rekomendasi: Gunakan sunscreen SPF $spf untuk kulit sensitif.<br>";
} else {
    $spf = 30;
    echo "Jenis kulit tidak dikenali. Default SPF $spf.<br>";
}

echo "<hr>";

// ==================== KASUS 3 ====================
// ==================== CEK STATUS MEMBER ====================
$isMember = true;
$diskonMember = 0;

if ($isMember) {
    $diskonMember = 0.2; // 20%
    echo "🎫 Anda adalah member! Dapat diskon tambahan 10%.<br>";
} else {
    echo "Anda bukan member, tidak ada diskon tambahan.<br>";
}

echo "<hr>";

// ==================== KASUS 4 ====================
// ==================== CEK PROMO HARI ====================
$hari = date("l"); // cek hari
$diskonHari = 0;

if ($hari == "Wednesday") {
    $diskonHari = 0.15; // 15% khusus Rabu
    echo "🎉 Promo Minggu Ceria! Diskon 15%!<br>";
} else {
    echo "Hari ini tidak ada promo khusus.<br>";
}

echo "<hr>";

// ==================== KASUS 5 ====================
// ==================== HITUNG TOTAL HARGA ====================
$hargaSetelahDiskon = $hargaProduk - ($hargaProduk * $diskonMember) - ($hargaProduk * $diskonHari);
$totalBayar = $hargaSetelahDiskon * $jumlahPesan;

// Update stok setelah pesanan
$stokProduk -= $jumlahPesan;

echo "Harga awal per sunscreen: Rp $hargaProduk<br>";
echo "Harga setelah diskon: Rp $hargaSetelahDiskon<br>";
echo "Jumlah pesanan: $jumlahPesan pcs<br>";
echo "Total bayar: Rp $totalBayar<br>";

echo "<hr>";
// ==================== KASUS 6 ====================
// ==================== RINGKASAN PESANAN ====================
echo "<b>📋 RINGKASAN PEMESANAN SUNSCREEN:</b><br>";
echo "Jenis Kulit: $jenisKulit<br>";
echo "Rekomendasi SPF: $spf<br>";
echo "Jumlah Pesanan: $jumlahPesan pcs<br>";
echo "Status Member: " . ($isMember ? "Ya" : "Tidak") . "<br>";
echo "Hari: $hari<br>";
echo "Total Bayar: Rp $totalBayar<br>";
echo "Sisa Stok: $stokProduk pcs<br>";
?>
