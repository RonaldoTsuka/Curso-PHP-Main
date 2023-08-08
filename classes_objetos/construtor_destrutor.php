<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade){
        echo "Construtor invocado! <br>";
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "Destrutor invocado! <br>";
    }
    
    public function Apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br> ";
    }
}

$pessoa = new Pessoa('Renata', 40);
$pessoa->Apresentar();


