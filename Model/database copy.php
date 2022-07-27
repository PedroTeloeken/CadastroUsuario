<?php

class dataBase{

    function connect(){
        return new mysqli("localhost" , "root" , "" , "cadastroUsers");
    }

    function insert($email , $password, $cep, $district, $city, $street){
        $conn = new mysqli("localhost" , "root" , "" , "cadastroUsers");
        $sql = "INSERT INTO users ( email, password, cep, district, city, street) VALUES ('$email ','$password','$cep','$district','$city','$street');";
        if($conn->query($sql) === TRUE){
            echo "Usuario Cadastrado";
        }else{
            echo "Erro:" . $sql . " " . $conn->error;
        }
        $conn->close();
    }

    function delet($email){
        $conn = new mysqli("localhost" , "root" , "" , "cadastroUsers");
        $sql = "DELETE FROM users WHERE email =  '$email'";
        $conn->query($sql);
        $conn->close();
        return "Feito";
    }

    function update($email , $password, $cep, $district, $city, $street){
        $conn = new mysqli("localhost" , "root" , "" , "cadastroUsers");
        $sql = "UPDATE `users` SET email = $email, password = $password , cep = $cep , district =  $district ,  city = $city , street = $street  WHERE email = $email ;";
        $conn->query($sql);
        $conn->close();
    }

    function allEmails(){
       $conn = new mysqli("localhost" , "root" , "" , "cadastroUsers");
        $sql = "SELECT email FROM users;";
        return $conn->query($sql);
        $conn->close();

    }

    function getUser($email){
        $conn = new mysqli("localhost" , "root" , "" , "cadastroUsers");
        $sql = "SELECT password FROM users WHERE email = '$email';";
        $conn->query($sql);
        $conn->close();
    }

}


?>