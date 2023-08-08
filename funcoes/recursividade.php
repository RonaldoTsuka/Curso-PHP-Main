<div class="titulo">Recursividade</div>

<?php
 //Fatoriando...
function fat($resultado){
    if($resultado == 0){
        return 1;
    }else{
        return $resultado  * fat($resultado -1);

    }
}

echo  fat($resultado = 4) . '<br>';

//Famoso Fibonacci



//Exemplo da aula:

function somaUmAte($numero){
    $soma = 0;
    for (; $numero >= 1 ; $numero--){
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(10). '<br>';

//Forma mais simples:
function somaUmAte2($numero){
    $soma = 0;
    for ($i = 1; $i <= $numero ; $i++){
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte2(5). '<br>';


function somaRecursivaUmAte($numero){
    //Condição de Parada!!!

    if($numero === 1) {
        return 1;
    }else{
        return $numero + somaUmAte2($numero - 1);
    }
}

echo somaRecursivaUmAte(150) . '<br>';

function somaRecursivaEconomica($numero){
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero -1);
}

echo somaRecursivaEconomica(150) . '<br>';