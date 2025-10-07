<?php
$marks = array(
    "hisna abidah" => array("matematika" => 85,"seni" => 90,"ipa" => 88),
    "aisya latifa" => array("matematika" => 78,"seni" => 95,"ipa" => 80),
    "elfa nur saida" => array("matematik" => 92,"seni" => 85,"ipa" => 89)
);

/* Accessing multi-dimensional array values */
echo "Nilai Hisna Abidah di Matematik : ";
echo $marks['hisna abidah']['matematika'] . "<br />";

echo "Nilai Aisya Latifa di Seni : ";
echo $marks['aisya latifa']['seni'] . "<br />";

echo "Nilai Elfa Nur Saida di ipa : ";
echo $marks['elfa nur saida']['ipa'] . "<br />";
?>
