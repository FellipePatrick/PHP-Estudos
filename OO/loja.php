<?php

class Fabricante{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function getNome(){
        return "{$this->nome}";
    }
}

class Produto {
    private $nome;
    private $preco;

    private $fabricante;

    public function __construct($nome, $preco, Fabricante $fabricante)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->fabricante = $fabricante;
    }

    public function getDetalhes(){
        return "O produto {$this->nome}, custa {$this->preco} reais e  o fabricante é {$this->fabricante->getNome()}.";
    }
    
}

$obj1 = new Fabricante("Edilson Marques");

$obj2 = new Produto("Carro", 50.000, $obj1);

echo $obj2->getDetalhes();

?>