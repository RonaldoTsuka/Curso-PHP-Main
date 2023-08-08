<div class="titulo">Laço For</div>

<?php

for( $cont = 1; $cont <=5; $cont++){
    echo "$cont";
}

echo '<br>';
echo '<hr>';
echo '<br>';

for(; $cont <= 10; $cont++){
    echo "$cont";
}
echo '<br>';
echo '<hr>';
echo '<br>';

for(; $cont <= 20;){
    echo "$cont";
    $cont++;
}


//Criando um array e usando o FOR

$array = ['segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sabado', 'domingo'];

print_r($array);
echo '<br>';
    for($i = 0; $i < count($array); $i++){
    echo "{$array[$i]}";
    };

    echo '<hr>';
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

for($i = 0; $i < count($matrix); $i++) {
    //Para não ter a alteração significativa da variável, é necessário que criemos uma
    //nova variável. $j
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}