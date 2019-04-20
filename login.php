<?php

include_once('conexao.php');


if(empty($_POST['usuario']) || empty ($_POST['senha'])) // validação para acessar apenas o php login se os dados estiverem preenchidos

{
    header('Location: index.php');
    exit();
}


$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha =  mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario from usuarios where usuario = '{$usuario}' and senha = md5('{$senha}')";

?>