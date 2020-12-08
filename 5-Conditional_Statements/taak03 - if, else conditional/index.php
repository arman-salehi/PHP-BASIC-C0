<!DOCTYPE html>
<html>
<body>
<?php
$test1 = 10;
$test2 = 6;
if($test1 == $test2) {
    echo "gelijk";
}

else{
    echo "ongelijk"
}
?>
<br>
<?php
$test1 = 10;
$test2 = 6;
if($test1 != $test2) {
    echo "ongelijk";
}
else{
    echo "gelijk"
}
?>
<br>
<?php
$test1 = 10;
$test2 = 6;
if($test1 === $test2) {
    echo "identiek";
}
else{
    echo "niet identiek"
}
?>
<br>
<?php
$test1 = 10;
$test2 = 6;
if($test1 > $test2) {
    echo "test1 is groter dan test2";
}

else{
    echo "test 2 is groter dan test1"
}
?>
<br>
<?php
$test1 = 10;
$test2 = 6;
if($test1 < $test2) {
    echo "test1 is kleiner dan test2";
}
else{
    echo "test 2 is kleiner dan test1"
}
?>
<br>
<?php
$test1 = 10;
$test2 = 6;
if($test1 >= $test2) {
    echo "test2 is groter of gelijk aan test1";
}
else{
    echo "test 2 is kleiner of gelijk aan test1"
}
?>
<br>
<?php
$test1 = 10;
$test2 = 6;
if($test1 <= $test2) {
    echo "test1 is kleiner of gelijk aan test2";
}
else{
    echo "test 2 is groter of gelijk aan test1"
}
?>
<br>
</body>
</html>