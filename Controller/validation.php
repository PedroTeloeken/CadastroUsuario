<?php

class valid {
    
    function validation($email , $password, $passwordConfirmad, $cep, $district, $city, $street ){
        if(empty($email) &&  empty($password) && empty($passwordConfirmad) && empty($cep) && empty($district) && empty($city) && empty($street) ){
            if($email == "" && $password == "" && $passwordConfirmad = "" && $cep == "" && $district == "" && $city == "" && $street == ""){
                echo "Preencha todos os campos";
            }
                }else if($password != $passwordConfirmad){
                    echo "As duas senhas não coincidem";
                    }else{
                        return true;
                        }
                            }
                                }
?>