<?php
echo "<h3>Postincrement</h3>";
$a = 12;
echo "\$a = $a <br />";
echo "\$a akan bernilai 12: " . $a++ . " (\$a++)<br />";
echo "\$a akan bernilai 13: " . $a . "<br />";
echo "<h3>Preincrement</h3>";
$a = 12;
echo "\$a = $a <br />";
echo "\$a akan bernilai 13: " . ++$a . " (++\$a)<br />";
echo "\$a akan bernilai 13: " . $a . "<br />";
echo "<h3>Postdecrement</h3>";
$a = 12;
echo "\$a = $a <br />";
echo "\$a akan bernilai 12: " . $a-- . " (\$a--)<br />";
echo "\$a akan bernilai 11: " . $a . "<br />";
echo "<h3>Predecrement</h3>";
$a = 12;
echo "\$a = $a <br />";
echo "\$a akan bernilai 11: " . --$a . " (--\$a)<br />";
echo "\$a akan bernilai 11: " . $a . "<br />";
?>