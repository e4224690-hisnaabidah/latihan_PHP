<?php
// pembuatan array
$coba = array (2=>"Hisna", "dua"=>"2",
'tiga'=>3,
true=>true,
9=>"sembilan",);
// pengaksesan array echo
$coba[2]; //Hisna
echo "<br />";
echo $coba["dua"]; //2
echo "<br />";
echo $coba['tiga']; //3
echo "<br />";
echo $coba[true]; //1 (true di konversi menjadi 1)
echo "<br />";
echo $coba[9]; // sembilan
?>