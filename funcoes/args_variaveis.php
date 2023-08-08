<div class="titulo">Argumentos variáveis</div>

<?php

function soma($a, $b) {
    return $a + $b;
}

echo soma(1, 4) . '<br>';
echo soma(1, 4, 10, 5) . '<br>'; //Não ocorre a soma de todos os números

function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4);