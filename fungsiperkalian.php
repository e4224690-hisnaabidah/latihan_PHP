<?php
//pembuatan fungsi
function perkalian($angka1, $angka2)
{
$a= $angka1;
$b= $angka2;
$hasil= $a*$b;
return $hasil;
}
//pemanggilan fungsi
$hasil=perkalian(9,3);
echo "Perkalian 9 x 3 adalah $hasil";
echo "<br />";
echo "Perkalian 6 x 6 adalah ".perkalian(6,6);
?>