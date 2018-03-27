<?php

require_once "./Conta.class.php";

$chico = new Conta();
$chico->saldo = 500.0;
$chico->numero = 1668;
$chico->agencia = 241;
$chico->titular = "Chico Augusto";



$ze = new Conta();
$ze->saldo = 500.0;
$ze->numero = 1668;
$ze->agencia = 241;
$ze->titular = "Chico Augusto";


$chico->transfere(100, $ze);


echo $chico;
echo "<br>";
echo $ze;