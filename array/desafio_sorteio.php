<div class="titulo">Desafio sorteio</div>

<?php

$nomes = ["Elza",
"Cinderela",
"Rapunzel",
"Ariel"];

$princesa = array_rand($nomes);
echo "$nomes[$princesa]";