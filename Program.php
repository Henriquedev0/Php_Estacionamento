<?php 
include_once 'Back.php';

$estacionamento1 = new Estacionamento("FIAT", "ABB123", "05:00", "18:00", 0);
$estacionamento1->setValorApagar();

$estacionamento2 = new Estacionamento("FORD", "2XXZ23", "10:00", "22:00", 0);
$estacionamento2->setValorApagar();

echo $estacionamento1;
echo "<br>";
echo $estacionamento2;
?>
