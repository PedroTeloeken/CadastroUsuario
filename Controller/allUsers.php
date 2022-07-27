<?php
// CONTROLLER...
require "../Model/service.php";

$srvUser = new Service();

$users = $srvUser->getAll();

// VIEW...
?>

<table border="1">
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>ações</th>
    </tr>
    <?php foreach($users as $u) : ?>
    <tr>
        <td><?=$u->id?></td>
        <td><?=$u->email?></td>
        <td>
            <a href="/cadastro/Controller/delete.php?id=<?=$u->id?>">apagar</a>
            <a href="/cadastro/Controller/update.php?id=<?=$u->id?>">editar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>