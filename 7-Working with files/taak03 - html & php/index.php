<?php
require 'database.php';
$leeftijd = 21;
?>
<html>
<head>
</head>
<body>
<div class="menu">
<?php include 'menu.php'; ?> 
</div>
<div id="isMeerderJarig">
<?php
if($leeftijd > 18 ){
echo "Je bent 18+, je mag genieten van de content.";
}
?>
</div>
</body>
</html>