<?php
include('verifica_login.php');
include('bulma.php');


?>

<h1 class="is-size-1-desktop">Ola, <?php echo $_SESSION['usuario'];?> </h1>

<br><br>
<a href="logout.php" class="button is-danger">sair</a>



