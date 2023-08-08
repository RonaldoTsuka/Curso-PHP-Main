<div class="titulo">Desafio For</div>

<?php
$impressao = '';
for($hash = 0 ; $hash <= 5; $hash++){
    $impressao .= '#';
    echo "$impressao <br>";
}

//sem usar o $hash++;

echo '<hr>';

for(
    $impressao2 = '#';
    $impressao2 !== '#';
    $impressao2 .= '#'
){
    echo "$impressao2 <br>";
}