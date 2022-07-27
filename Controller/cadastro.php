<?php

require "../Model/database.php";
require "../Controller/validation.php";

$dataBase = new dataBase();

$conn = $dataBase->connect();

$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirmed = $_POST['passwordConfirm'];
$cep = $_POST['cep'];
$district = $_POST['district'];
$city = $_POST['city'];
$street = $_POST['street'];

$validation = new valid();

$validation = $validation->validation($email , $password, $passwordConfirmed, $cep, $district, $city, $street);

if($validation){

    $dataBase->insert($email , $password, $passwordConfirmed, $cep, $district, $city, $street);
}


?>