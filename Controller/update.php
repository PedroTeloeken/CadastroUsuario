<?php
require "../Model/database.php";

$dataBase = new dataBase();

$dataBase->update($email , $password, $cep, $district, $city, $street);
echo "usuario alterado";

?>