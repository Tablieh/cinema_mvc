<?php
       namespace Model\Entity;
       use App\AbstractEntity;

    class Realisateurs extends AbstractEntity
    {
        private $id;
        private $NomRealisateur;
        public function __construct($data){
            parent::hydrate($data, $this);
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
        /**
         * Get the value of NomRealisateur
         */ 
        public function getNomRealisateur()
        {
                return $this->NomRealisateur;
        }

        /**
         * Set the value of NomRealisateur
         *
         * @return  self
         */ 
        public function setNomRealisateur($NomRealisateur)
        {
                $this->NomRealisateur = $NomRealisateur;

                return $this;
        }
        public function __toString()
        {
                return $this->getNomRealisateur();
        }


        
}