<?php

include 'szamologep.php';
$szamitas = new Szamologep('10','2');

echo $szamitas;
echo '<br>';
echo $szamitas->osszeadas();
echo '<br>';
echo $szamitas->osztas();
echo '<br>';
echo $szamitas->szorzas();
echo '<br>';
echo $szamitas->kivonas();
?>

