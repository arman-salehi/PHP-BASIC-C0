<!DOCTYPE HTML>
<html>
<body>
<ul>
<?php
$myDogNames = ["Charlie", "Buddy", "Toby"];
echo "<li>"$myDogNames[0]"</li>";
echo "<li>"$myDogNames[1]"</li>";
echo "<li>"$myDogNames[2]"</li>";
$myDogNames[1] = "Test";
echo "<li>"$myDogNames[1]"</li>";
?>
</ul>
</body>
</html>