<?php
  namespace Model\Manager;
  use App\AbstractManager;
  use Model\Entity\Films;


    class FilmsManager extends AbstractManager
    {
        public function __construct(){
            parent::connect();
        }


        public function findAll(){
            return $this->getResults(
                "Model\Entity\Films",
                "SELECT * FROM films ORDER BY titre"
            );
        }

        public function findOneById($id){
            return $this->getOneOrNullResult(
                "Model\Entity\Films",
                "SELECT * FROM films WHERE id = :num", 
                [
                    "num" => $id
                ]
            );
        }
        public function findcastingbyfilm($id){
            return $this->getResults(
                "Model\Entity\Casting_group",
                "SELECT * FROM Casting_group WHERE films_id = :num", 
                [
                    "num" => $id
                ]
            );
        }
        public function findTypebyfilm($id){
            return $this->getResults(
                "Model\Entity\Genres",
                "SELECT g.id as id, NomGenres FROM types t, genres g WHERE t.genres_id= g.id AND films_id = :num", 
                [
                    "num" => $id
                ]
            );
        }

        public function insertFilms($titre, $annee_de_sortie , $duree, $resume, $note){
            return $this->executeQuery( 
                "INSERT INTO films (titre, annee_de_sortie , duree, resume, note) VALUES (:titre, :annee_de_sortie , :duree, :resume,:note)",
                [
                    "titre" => $titre,
                    "annee_de_sortie" => $annee_de_sortie,
                    "duree" => $duree,
                    "resume" =>$resume,
                    "note" => $note,
                ]
            );
        }
    
        public function deleteFilms($id){
            return $this->executeQuery( 
                "DELETE FROM films WHERE id = :id",
                [
                    "id" => $id 
                ]
            );
        }
    }