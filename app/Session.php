<?php
  namespace App;
  use model\Entity\User;
  use model\Entity\Films;
    
    abstract class Session
    {
        public static function getFlashes(){
            if(isset($_SESSION['messages'])){
                var_dump($_SESSION['messages']);
                unset($_SESSION['messages']);
            }
        }

        public static function addFlash($type, $message){
            if(!isset($_SESSION["messages"])){
                $_SESSION["messages"] = [];
            }
            if(!isset($_SESSION["messages"][$type])){
                $_SESSION["messages"][$type] = [];
            }
            $_SESSION["messages"][$type][] = $message;
        }
        public static function getUser(){
            if(isset($_SESSION["user"])){
                return $_SESSION["user"];
            }
            return null;
        }

        /**
         * Put the user param in session (aka. connect the user in the app)
         * 
         * @param User $user the user object to put in session         * 
         * @return void
         */
        public static function setUser($user){
            $_SESSION["user"] = $user;
        }

        public static function removeUser(){
            unset($_SESSION["user"]);
        }

        public static function hasRole($role){
            return isset($_SESSION["user"]) && $_SESSION["user"]->getRole() === $role;
        }
        
    }