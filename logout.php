<?php

session_start();
//unset($_SESSION['nomedasessao']); caso queira uma sessao especifica
session_destroy(); // destruindo todas as sessoes
header('Location: index.php'); //voltando pro HTML

?>