<div class="titulo">Função & Escopo</div>

<?php
//Bloco de códigos que possuem algoritmos
function imprimirMensagens(){
    echo "Olá mundo!";
    echo "Até a próxima MUNDOOOO!";
}
echo "<br>";
imprimirMensagens();
echo "<br>";
imprimirMensagens();
echo "<br>";
imprimirMensagens();

echo "<br>";

$variavel = 1;

function trocaValor(){
    $variavel  = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois $variavel <br>";

function trocaValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a fução: $variavel <br>"; 
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";
