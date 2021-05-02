<?php
      namespace Model\Entity;
      use App\AbstractEntity;

    class Genres extends AbstractEntity
    {
        private $id;
        private $NomGenres;

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
         * Get the value of NomGenres
         */ 
        public function getNomGenres()
        {
                return $this->NomGenres;
        }

        /**
         * Set the value of NomGenres
         *
         * @return  self
         */ 
        public function setNomGenres($NomGenres)
        {
                $this->NomGenres = $NomGenres;

                return $this;
        }
        public function __toString()
        {
                return $this->getNomGenres();
        }
}
