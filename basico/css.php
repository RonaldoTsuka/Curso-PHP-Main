<div class="titulo">Integrção CSS</div>

<h1 center>
<?php
  echo 'Olá!';
  echo '<small>';
  echo '<br>';
  echo 'Mundo!';
  echo '</small>';
?>

</h1>

<?= "<div center azul> Outra forma de me 'expressar' </div>"  ?>

<br>

<div>
  <button><?="Legal" ?></button>
</div>

<style>
    button{
        padding: 5px 20px;
        background-color: blue;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: blue;
    }

    [dobro]{
        font-size: 2rem;
    }
</style>