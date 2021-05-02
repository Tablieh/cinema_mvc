<?php
  namespace Model\Manager;
  use App\AbstractManager;
  use Model\Entity\Casting_group;

    class Casting_groupManager extends AbstractManager
    {
        public function __construct(){
            parent::connect();
        }


        public function findAll(){
            return $this->getResults(
                "Model\Entity\Casting_group",
                "SELECT * FROM Casting_group"
            );
        }

        public function findOneById($id){
            return $this->getOneOrNullResult(
                "Model\Entity\Casting_group",
                "SELECT * FROM Casting_group WHERE id = :num", 
                [
                    "num" => $id
                ]
            );
        }

        public function insertCasting_group($acteurs_id, $films_id, $role_id){
            return $this->executeQuery( 
                "INSERT INTO Casting_group (acteurs_id, films_id, role_id) VALUES (:acteurs_id, :films_id, :role_id)",
                [
                    "acteurs_id" => $acteurs_id,
                    "films_id" => $films_id,
                    "role_id" => $role_id,
                ]
            );
        }
    
        public function deleteCasting_group($id){
            return $this->executeQuery( 
                "DELETE FROM Casting_group WHERE id = :id",
                [
                    "id" => $id 
                ]
            );
        }
        
    }