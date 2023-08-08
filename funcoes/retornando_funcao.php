<div class="titulo">Retornando uma função</div>

<?php 

function soma($a) {
    return function ($b) use ($a){
        return $a + $b;
    };
}

echo soma(1)(4);


$doisMais = soma(2);
echo '<br>' , $doisMais(10);
echo '<br>' , $doisMais(5);