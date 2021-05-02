<?php
namespace Model\Manager;
use App\AbstractManager;
use Model\Entity\User;

    class UserManager extends AbstractManager
    {
        public function __construct(){
            parent::connect();
        }

        public function insertUser($pesudo,$mail, $pass){
            return $this->executeQuery(
                "INSERT INTO user_acc (pesudo,email, password, role) VALUES (:pesudo,:mail, :pass, 'ROLE_USER')",
                [
                    "pesudo"=>$pesudo,
                    "mail" => $mail,
                    "pass" => $pass,
                   
                ]
            );
        }
    
        function getUserByEmail($mail){
            return $this->getOneOrNullResult(
                "User_acc",
                "SELECT * FROM user_acc WHERE email = :mail",
                [
                    "mail" => $mail
                ]
            );
        }

        function getPasswordByEmail($mail){
            return $this->getOneValue(
                "SELECT password FROM user_acc WHERE email = :mail",
                [
                    "mail" => $mail
                ]
            );
        }

    }
