<?php
  namespace Model\Manager;
  use App\AbstractManager;
  use Model\Entity\Acteurs;

    class ActeursManager extends AbstractManager
    {
        public function __construct(){
            parent::connect();
        }


        public function findAll(){
            return $this->getResults(
                "Model\Entity\Acteurs",
                "SELECT * FROM acteurs ORDER BY nom"
            );
        }
    
        public function findOneById($id){
            return $this->getOneOrNullResult(
                "Model\Entity\Acteurs",
                "SELECT * FROM acteurs WHERE id = :num", 
                [
                    "num" => $id
                ]
            );
        }
        public function findFilmByActeur($id){
            return $this->getResults(
                "Model\Entity\Films",
                    "SELECT nom , titre
                    FROM casting_group c , acteurs a , films f
                    WHERE c.acteurs_id = a.id
                    AND c.films_id = f.id
                    AND a.id = :num",
                [
                    "num" => $id
                ]
            );
        }
        

        public function insertActeurs($nom, $prenom, $sexe, $date_de_naissance){
            return $this->executeQuery( 
                "INSERT INTO acteurs (nom, prenom, sexe, date_de_naissance) VALUES (:nom, :prenom, :sexe, :date_de_naissance)",
                [
                    "nom" => $nom,
                    "prenom" => $prenom,
                    "sexe" => $sexe,
                    "date_de_naissance" =>$date_de_naissance
                ]
            );
        }
    
        public function deleteActeurs($id){
            return $this->executeQuery( 
                "DELETE FROM acteurs WHERE id = :id",
                [
                    "id" => $id 
                ]
            );
        }
    }