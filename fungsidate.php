<?php
// Format tanggal sekarang d-F-Y
$tanggalSekarang = date('d-F-Y');
echo "Tanggal sekarang: " . $tanggalSekarang . "<br><br>";

// Tanggal lahir Hisna Abidah
$tgl_lahir = 13;
$bln_lahir = 4; // April
$thn_lahir = 2006;

// Buat objek DateTime
$today      = new DateTime();
$tanggalLahir = new DateTime("$thn_lahir-$bln_lahir-$tgl_lahir");

// Hitung umur (tahun)
$umur = $today->format('Y') - $thn_lahir;
if ($today->format('n') < $bln_lahir || ($today->format('n') == $bln_lahir && $today->format('j') < $tgl_lahir)) {
    $umur--;
}

// Cari tanggal ulang tahun terakhir
$ulangTahunTerakhir = new DateTime($today->format('Y') . "-$bln_lahir-$tgl_lahir");
if ($today < $ulangTahunTerakhir) {
    $ulangTahunTerakhir->modify('-1 year');
}

// Hitung selisih hari sejak ulang tahun terakhir
$selisih = $ulangTahunTerakhir->diff($today);
$hariTambahan = $selisih->days;

// Cek apakah hari ini ulang tahun
if ($today->format('j') == $tgl_lahir && $today->format('n') == $bln_lahir) {
    echo "🎉 Selamat Ulang Tahun Hisna Abidah 🎂 (13-April-2006)<br>";
    echo "Hari ini usia Hisna Abidah genap: <b>$umur tahun</b>";
} else {
    echo "Hari ini bukan tanggal ulang tahun Hisna Abidah.<br>";
    echo "Usia Hisna Abidah saat ini: <b>$umur tahun $hariTambahan hari</b>";
}
?>
