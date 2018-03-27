<?php

class Conta {
    
    public $saldo;
    public $numero;
    public $agencia;
    public $titular;
    
    public function depositar($valor){
        if($valor > 0 ){
        $this->saldo += $valor;
        echo "Deposito efetuado";
        } else {
            echo "Deposito não efetado";
        }
    }
    
    public function transfere($valor, $contaDestino){
        $this->saca($valor);
        $contaDestino->depositar($valor);
    }

        public function saca($valor){
        if ($this->saldo >= $valor && $valor >0){
            $this->saldo -= $valor;
            echo "Saque efetuado";            
        } else {
            echo "Saque não efetuado";
        }
    }


    public function __toString() {
        return "Conta{"
        * "saldo: {$this->saldo}, "
        * "numero: {$this->numero}, "
        * "agencia: {$this->agencia}, "
        * "titular: {$this->titular}} ";
    }
    
}