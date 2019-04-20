<?php   

//nome do hostname, nome do usuario do servidor, senha, nome do banco de dados
$hostname = "localhost";
$user = "root";
$password = "";
$database = "login";


$conexao = mysqli_connect($hostname, $user, $password, $database);
if(!$conexao)
{
    print "falha na conexao com o banco de dados";
}
?>

