<?php
namespace Model\Manager;
use App\AbstractManager;
use Model\Entity\Types;

    class TypesManager extends AbstractManager
    {
        public function __construct(){
            parent::connect();
        }


        public function findAll(){
            return $this->getResults(
                "Model\Entity\Types",
                "SELECT * FROM types"
            );
        }

        public function findOneById($id){
            return $this->getOneOrNullResult(
                "Model\Entity\Types",
                "SELECT * FROM types WHERE id = :num", 
                [
                    "num" => $id
                ]
            );
        }
    }