<div class="titulo">While/Do While</div>

<?php

const VALOR_LIMITE = 5;

//WHILE

$contador = 0;

while ($contador < VALOR_LIMITE){
    echo "while $contador <br>";
    $contador++;
}

// DO WHILE

$contador = 10;

do{
    echo "do-while $contador <br>";
$contador++;
} while($contador < VALOR_LIMITE);


//breack e while

$contador = 0;

while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}