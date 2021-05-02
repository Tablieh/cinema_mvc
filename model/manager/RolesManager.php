<?php
      namespace Model\Manager;
      use App\AbstractManager;
      use Model\Entity\Roles;

    class RolesManager extends AbstractManager
    {
        public function __construct(){
            parent::connect();
        }


        public function findAll(){
            return $this->getResults(
                "Model\Entity\Roles",
                "SELECT * FROM roles ORDER BY NomRole"
            );
        }

        public function findOneById($id){
            return $this->getOneOrNullResult(
                "Model\Entity\Roles",
                "SELECT * FROM roles WHERE id = :num", 
                [
                    "num" => $id
                ]
            );
        }
        public function findFilmByRoles($id){
            return $this->getResults(
                "Model\Entity\Films",
                "SELECT NomRole , titre
                FROM casting_group c , roles r , films f
                WHERE c.acteurs_id = r.id
                AND c.films_id = f.id
                AND r.id =  :num",
                [
                    "num" => $id
                ]
            );
        }
        public function findActeursByRoles($id){
            return $this->getResults(
                "Model\Entity\Casting_group",
                "SELECT * FROM casting_group ca WHERE  ca.roles_id = :num",
                [
                    "num" => $id
                ]
            );
        }

        public function insertRole($NomRole){
            return $this->executeQuery( 
                "INSERT INTO roles (NomRole) VALUES (:NomRole)",
                [
                    "NomRole" => $NomRole
                ]
            );
        }
    
        public function deleteRole($id){
            return $this->executeQuery( 
                "DELETE FROM roles WHERE id = :id",
                [
                    "id" => $id 
                ]
            );
        }
    }