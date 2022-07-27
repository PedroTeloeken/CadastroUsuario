<?php

require "../Model/Service.php";

$id = (int) $_GET['id'];

$srv = new Service();

$srv->delete($id);

?>

<p>Usuario Deletado</p>
<a href="/cadastro/Controller/allUsers.php">voltar</a>
