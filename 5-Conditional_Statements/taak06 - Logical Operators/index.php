<!DOCTYPE html>
<html>
<body>
<?php
$var1 = 5;
$var2 = 9;

if($var1 < 10 && $var2 > 5) {
    echo "Variable 1 is kleiner dan 10, en variable 2 is groter dan 5.";
} else {
    echo "Variable 1 is groter dan 10, en variable 2 is kleiner dan 5.";
}
?>
<br>
<?php
$var1 = 5;
$var2 = 9;

if($var1 < 10 || $var2 > 5) {
    echo "Een of beide variablen zijn groter/kleiner dan 10/5.";
} else {
    echo "Geen van beide variablen zijn groter/kleiner dan 10/5";
}
?>
<br>
<?php
$var1 = 5;
$var2 = 9;

if($var1 < 10 xor $var2 > 5) {
    echo "Een van de waardes zijn waar";
} else {
    echo "Geen van de waardes zijn waar";
}
?>
<br>
<?php
$var1 = 5;
$var2 = 9;

if(!$var1 < 10  $var2 > 5) {
    echo "De vergelijking is niet waar";
} else {
    echo "De vergelijking is wel waar";
}
?>
<br>
</body>
</html>