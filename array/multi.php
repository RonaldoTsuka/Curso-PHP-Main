<div class="titulo">Multidimensionais</div>

<?php

//Array dentro de array

$dados = [
    [
        "nome" => "Sandra",
        "idade" => 27,
        "naturalidade" => "São José dos Campos"
    ],
    
    [
        "nome" => "Afrodite",
        "idade" => 22,
        "naturalidade" => "Santana"
    ],

];

print_r($dados);
echo '<br>' . $dados[0] ['idade'];
echo '<br>' . $dados[1] ['idade'];

//sobreescrevendo os dados do array

$dados[] = [
    "nome" => "Amanda",
    "idade" => 32,
    "naturalidade" => "Osasco"
];

print_r($dados);