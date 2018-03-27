<?php
class Lampada{
    
    
    /* Atriputos (Propriedades)*/
    public $potencia; 
    public $fabricante; 
    public $corluz; 
    public $estadoLampada;
    
    /*Métodos (Comportamentos*/
    public function acende() {
        $this->estadoLampada = true;
    }
    public function apaga() {
        $this->estadoLampada = false;
    }
}

$ge = new Lampada();

$ge->corluz = "Branca";
$ge->fabricante = "General Eletric";
$ge ->potencia = 80.0;
$ge->acende();

echo "O fabricande é {$ge->fabricante} com porência {$ge->potencia}W";

var_dump($ge);

