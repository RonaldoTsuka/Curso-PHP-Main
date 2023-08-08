<div class="titulo">Primeira Classe</div>


<?php

class Cliente {
    //Atributos:
    public $nome = 'Anônimo';
    public $idade = 18;
    
    public function Apresentar(){
        echo "Nome: {$this->nome}
        Idade: {$this->idade}";
    }
}

//Objeto 1
$cliente1 = new Cliente();
$cliente1->nome = "Ana Júlia";
$cliente1->Apresentar();
echo '<br>';
echo $cliente1->nome = "Aline";

echo '<br>';
//Objeto 2
$cliente2 = new Cliente();
$cliente2->nome = " Júlia";
$cliente2->Apresentar();