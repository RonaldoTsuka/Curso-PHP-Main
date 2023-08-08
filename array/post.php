<div class="titulo">$_POST</div>

<form action="#"  method="post">
    <!-- name é a chave dos parametros que serão enviados -->
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado"> 
        <option value="AC"> Acre </option>
        <option value="BH"> Bahia </option>
    </select>
    <button> Enviar </button>
</form>

<?php
print_r($_POST);