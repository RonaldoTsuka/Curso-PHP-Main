<div class="titulo">Argumentos e retorno</div>

<?php

function obterMendagem(){
    return 'Seja bem vindo!';
}

echo obterMendagem();
echo '<br>';
//ou
obterMendagem();
$m = obterMendagem();
echo $m;




//personalizando mensagem
//$nome é um parametro

function obterMendagemComNome($nome){
    return "Bem vinda, {$nome}!";
}
echo '<br>';
echo obterMendagemComNome('Julia');

function soma($a, $b){
    return $a + $b;
}

echo '<br>';
echo soma(10, 10);
echo '<br>';

$z = 20;
$x = 20;
echo soma($z, $x);

echo '<br>';

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo $variavel;

echo '<br>';

//Não recebe um valor, e sim um endereço
//& referencia
function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5000);
echo $variavel;