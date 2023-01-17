<?php

abstract class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;

    }

    public function getDetalhes(){
        return "A agencia é {$this->agencia}, a conta {$this->conta} e o saldo está {$this->saldo} reais.<br/>";
    }

    public function Depositar($valor){
        $this->saldo += $valor;
        echo "Deu certo e  o saldo atual é {$this->saldo} reais <br/>";
    }

}

final class Poupanca extends Conta {
    public function Saque($valor){
        if ($this->saldo >=  $valor):
            $this->saldo -= $valor;
            echo "Deu certo e  o saldo atual é {$this->saldo}";
        else:
            echo "Não deu certo";
        endif;
    }
}

final class Corrente extends Conta {
    protected $limite;
    public function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function Saque($valor){
        if ($this->saldo + $this->limite >=  $valor):
            $this->saldo -= $valor;
            echo "Deu certo e  o saldo atual é {$this->saldo}";
        else:
            echo "Não deu certo";
        endif;
    }
}

$obj1 = new Poupanca(113, 12312, 900);

echo $obj1->getDetalhes();

echo $obj1->Depositar(500);

echo $obj1->getDetalhes();

?>