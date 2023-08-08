<div class="titulo">Desafio Equação</div>

<?php

$numerador1 = (6 * (3 + 2)) ** 2;
$d1 = 3 * 2;
$numerador2 = (1 - 5) * (2 - 7);
$d2 = 2;
$d3 = 10 ** 3;

$numeradorSuperior1 = $numerador1 / $d1;
$numeradorSuperior2 = ($numerador2 / $d2) ** 2;

$total = ($numeradorSuperior1 - $numeradorSuperior2) ** 3 ;

$final = $total / $d3 ;

echo  $final;