<?php

require "./Carro.class.php";

$gol= new Carro("Gol", "Prata");

$gol->modelo = "Gol";
$gol->cor = "Prata";

$gol->colocaVelocidadeAtual(20);

$gol->acelera();
$gol->acelera();

echo "Velocidade atual: {{$gol->pegaVelocidadeAtual()} - ";
echo "Marcha Atual: {$gol->pegaMarcha()}<br>";


$gol->acelera();
$gol->acelera();
$gol->acelera();

echo "Velocidade atual: {{$gol->pegaVelocidadeAtual()} - ";
echo "Marcha Atual: {$gol->pegaMarcha()}<br>";

$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();

echo "Velocidade atual: {$gol->pegaVelocidadeAtual()} - ";
echo "Marcha Atual: {$gol->pegaMarcha()}<br>";