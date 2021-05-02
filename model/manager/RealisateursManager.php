<?php
   namespace Model\Manager;
   use App\AbstractManager;
   use Model\Entity\Realisateurs;

    class RealisateursManager extends AbstractManager
    {
        public function __construct(){
            parent::connect();
        }


        public function findAll(){
            return $this->getResults(
                "Model\Entity\Realisateurs",
                "SELECT * FROM realisateurs ORDER BY NomRealisateur"
            );
        }

        public function findOneById($id){
            return $this->getOneOrNullResult(
                "Model\Entity\Realisateurs",
                "SELECT * FROM realisateurs WHERE id = :num", 
                [
                    "num" => $id
                ]
            );
        }
        public function findFilmByRealisateurs($id){
            return $this->getResults(
                "Model\Entity\Films",
                    "SELECT NomRealisateur , titre
                    FROM films f , realisateurs r 
                    WHERE f.realisateurs_id = r.id
                    AND f.id = :num
                    GROUP BY NomRealisateur",
                [
                    "num" => $id
                ]
            );
        }

        public function insertRealisateur($NomRealisateur){
            return $this->executeQuery( 
                "INSERT INTO realisateurs (NomRealisateur) VALUES (:NomRealisateur)",
                [
                    "NomRealisateur" => $NomRealisateur
                ]
            );
        }
    
        public function deleteRealisateur($id){
            return $this->executeQuery( 
                "DELETE FROM realisateurs WHERE id = :id",
                [
                    "id" => $id 
                ]
            );
        }
    }