<?php

class Produto {
    public $preco;
    public $descricao;

    public function __construct($descricao,  $preco)
    {
        $this->preco = $preco;
        $this->descricao = $descricao;
    }

    public function getDetalhes(){
        return "O produto {$this->descricao} custa {$this->preco} reais.";
    }

}


$p1 = new Produto("Livro", 50);

echo $p1->getDetalhes();

?>