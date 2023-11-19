<?php 
include_once 'Back.php';

$estacionamento1 = new Estacionamento("Modelo 1", "ABC-1234", "09:00", "18:00", 0);
$estacionamento1->setValorApagar();

echo $estacionamento1;
?>
