<?php
namespace Model\Manager;
use App\AbstractManager;
use Model\Entity\Genres;

    class GenresManager extends AbstractManager
    {
        public function __construct(){
            parent::connect();
        }


        public function findAll(){
            return $this->getResults(
                "Model\Entity\Genres",
                "SELECT * FROM genres"
            );
        }

        public function findOneById($id){
            return $this->getOneOrNullResult(
                "Model\Entity\genres",
                "SELECT * FROM genres WHERE id = :num", 
                [
                    "num" => $id
                ]
            );
        }

        public function insertGenres($NomGenres){
            return $this->executeQuery( 
                "INSERT INTO genres (NomGenres) VALUES (:NomGenres)",
                [
                    "NomGenres" => $NomGenres
                ]
            );
        }
    
        public function deleteGenres($id){
            return $this->executeQuery( 
                "DELETE FROM genres WHERE id = :id",
                [
                    "id" => $id 
                ]
            );
        }
    }