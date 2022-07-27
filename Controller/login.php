<?php 
require "../Model/database.php";

$email = $_POST["email"];
$password = $_POST["password"];
$allUsers = [];

$db = new dataBase();

//$users = $db->getUser($email);

$users = $db->allEmails();

if($users->num_rows > 0){
    while($row = $users->fetch_assoc()){
        $allUsers[] = [
            "email" => $row["email"]
        ];
    }
}

print_r($allUsers);

if(is_string($email)){
    echo "true";
}else {
    echo "false";
}



foreach($allUsers as $x){
    if($x["email"] == $email){
        $dbPassword = $db->getUser($email);
            if($dbPassword == $password){
                echo "Login efetuado com sucesso";
                }else{
                    echo "senha incorreta";
                        }
                            }
                                }


echo "Usuario não existe ou email incorreto" . "<br>" ;
echo $email;

?>