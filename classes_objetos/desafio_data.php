<div class="titulo"> Desafio da classe - data </div>

<?php


class Data{
    public $dia = "01";
    public $mes = "janeiro";
    public $ano = "1970";

    public function Apresentar(){
        echo "{$this->dia}/{$this->mes}/{$this->ano}";
    }

}

$data = new Data();
$data->Apresentar();