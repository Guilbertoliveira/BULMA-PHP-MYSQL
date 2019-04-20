<?php

include_once('conexao.php');


if(empty($_POST['usuario']) || empty ($_POST['senha'])) // validação para acessar apenas o php login se os dados estiverem preenchidos

{
    header('Location: index.php');
    exit();
}

?>