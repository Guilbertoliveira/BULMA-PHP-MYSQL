<?php
session_start(); //iniciando session
include_once('conexao.php');


if(empty($_POST['usuario']) || empty ($_POST['senha'])) // validação para acessar apenas o php login se os dados estiverem preenchidos

{
    header('Location: index.php');
    exit();
}


$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha =  mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_id, usuario from usuarios where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);//consultando

$row = mysqli_num_rows($result); // linhas retornadas retorna validação autenticada

echo $row;

if ($row == 1)
{
    $_SESSION['usuario'] = $usuario; // criando session
    header('Location: painel.php');  //se for ele vai pro painel
    exit();
} else {
    header('Location: index.php'); // se nao volta paginca inicial
}
?>