<?php
/* Cara pertama membuat array asosiatif */
$gaji = array(
    "hisna abidah" => 5000,
    "aisya latifa" => 4000,
    "elfa nur saida" => 3000
);

echo "Gaji Hisna Abidah adalah Rp ". $gaji['hisna abidah'] . "<br />";
echo "Gaji Aisya Latifa adalah Rp ". $gaji['aisya latifa'] . "<br />";
echo "Gaji Elfa Nur Saida adalah Rp ". $gaji['elfa nur saida'] . "<br />";

/* Cara kedua: mengubah nilai array */
$gaji['hisna abidah'] = "tinggi";
$gaji['aisya latifa'] = "sedang";
$gaji['elfa nur saida'] = "rendah";

echo "Kategori gaji Hisna Abidah adalah ". $gaji['hisna abidah'] . "<br />";
echo "Kategori gaji Aisya Latifa adalah ". $gaji['aisya latifa'] . "<br />";
echo "Kategori gaji Elfa Nur Saida adalah ". $gaji['elfa nur saida'] . "<br />";
?>
