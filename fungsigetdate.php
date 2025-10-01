<?php
// Ambil tanggal sekarang dengan getdate()
$now = getdate();
echo "Tanggal sekarang: " . str_pad($now['mday'],2,"0",STR_PAD_LEFT) . "-" .
     $now['month'] . "-" . $now['year'] . "<br><br>";

// Tanggal lahir Hisna Abidah
$tgl_lahir = 13;
$bln_lahir = 4;
$thn_lahir = 2006;

// Buat objek DateTime dari data getdate()
$today = new DateTime($now['year']."-".$now['mon']."-".$now['mday']);
$tanggalLahir = new DateTime("$thn_lahir-$bln_lahir-$tgl_lahir");

// Hitung umur (tahun)
$umur = $now['year'] - $thn_lahir;
if ($now['mon'] < $bln_lahir || ($now['mon'] == $bln_lahir && $now['mday'] < $tgl_lahir)) {
    $umur--;
}

// Cari tanggal ulang tahun terakhir
$ulangTahunTerakhir = new DateTime($now['year']."-$bln_lahir-$tgl_lahir");
if ($today < $ulangTahunTerakhir) {
    $ulangTahunTerakhir->modify('-1 year');
}

// Hitung selisih hari sejak ulang tahun terakhir
$selisih = $ulangTahunTerakhir->diff($today);
$hariTambahan = $selisih->days;

// Cek apakah hari ini ulang tahun
if ($now['mday'] == $tgl_lahir && $now['mon'] == $bln_lahir) {
    echo "🎉 Selamat Ulang Tahun Hisna Abidah 🎂 (13-April-2006)<br>";
    echo "Hari ini usia Hisna Abidah genap: <b>$umur tahun</b>";
} else {
    echo "Hari ini bukan tanggal ulang tahun Hisna Abidah.<br>";
    echo "Usia Hisna Abidah saat ini: <b>$umur tahun $hariTambahan hari</b>";
}
?>
