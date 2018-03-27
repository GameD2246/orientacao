<?php

//class Carro {
//    public $Marca;
//    public $ano;
//    public $estadoCarro;
//    
//    
//    public function ligado() {
//        $this->estadoCarro = TRUE;
//        echo "O carro esta ligado";
//    }
//    
//    public function desligado(){
//        $this->estadoCarro = FALSE;
//        echo "O carro esta desligado";
//    }
//    
//}
//$Punto = new Carro();
//
//$Punto->Marca = "Fiat";
//$Punto->ano = "2016";
//$Punto->ligado();
//
//echo "O carro da Marca {$Punto->Marca} do ano {$Punto->ano} esta {$Punto->ligado()} ";


class Carro {
    /* ATRIBUTOS */

    private $modelo;
    private $cor;
    private $velocidadeAtual;
    private $velocidadeMaxima;

    /* CONSTRUTOR */

    public function __construct($modelo, $cor) {
        $this->modelo = $modelo;
        $this->cor = $cor;
    }

    /*MÉTODOS*/
    public function pegaCor() {
        return $this->cor;
    }
    
    public function colocaVelocidadeAtual($velocidadeAtual) {
        if ($velocidadeAtual < 0) {
            echo"Velocidade não poe ser negativa";
        } else if ($velocidadeAtual % 10 != 0) {
            echo "Velocidade deve ser multiplho de 10 <br>";
        } else {
            $this->velocidadeAtual = $velocidadeAtual;
        }
    }

    public function pegaVelocidadeAtual() {
        return $this->velocidadeAtual;
    }

    public function acelera() {
        $this->velocidadeAtual += 10.0;
    }

    public function freia() {
        if ($this->velocidadeAtual >= 10) {
            $this->velocidadeAtual -= 10.0;
        }
    }

    public function pegaMarcha() {
        if ($this->velocidadeAtual == 0) {
            return "Neutro";
        } else if ($this->velocidadeAtual < 20) {
            return 1;
        } else if ($this->velocidadeAtual < 30) {
            return 2;
        } else if ($this->velocidadeAtual < 50) {
            return 3;
        } else if ($this->velocidadeAtual < 70) {
            return 4;
        } else {
            return 5;
        }
    }

}
