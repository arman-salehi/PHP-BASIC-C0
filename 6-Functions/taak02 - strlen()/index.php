<!DOCTYPE html>
<html>
<body>
<?php
function mijnNaamIsGroot(){
    $voornaam = 'Arman ';
    $achternaam = 'Salehi';

    $geheleNaam = ('Mijn naam is ' . $voornaam . $achternaam);
    echo strtoupper($geheleNaam);
}

mijnNaamIsGroot();
?>
</body>
</html>