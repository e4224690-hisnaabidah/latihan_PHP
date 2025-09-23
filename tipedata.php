<?php
$x = 1234; var_dump($x); echo "<br>";
$x = -432; // negative number
var_dump($x);
echo "<br>";
$x = 0x1A; // hexadecimal number var_dump($x);
echo "<br>";
$x = 076; // octal number var_dump($x);
$x = 1234.567; var_dump($x); echo "<br>";
$x = 5.67e3;
var_dump($x);
echo "<br>";
$x = 9E-5;
var_dump($x);
echo strlen("Hello world!");
echo strpos("Hello world!","world");
?>