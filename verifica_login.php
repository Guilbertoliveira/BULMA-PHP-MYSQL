<?php

session_start();
if(!$_SESSION['usuario']){ //se sessao nao estiver com o usuario armazenado
    header('Location: index.php');
    exit();

}
?>