<!DOCTYPE html>
<html>
<body>
<?php
function geefTienProcent(){
    $koopPrijs = '75';
    $korting = '7.5';
    return $koopPrijs * $korting;
}

echo geefTienProcent();
?>
</body>
</html>