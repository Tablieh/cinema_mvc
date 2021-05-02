<?php  
namespace Model\Entity;
   use App\AbstractEntity;
   

    class Casting_group extends AbstractEntity
    {
        private $acteurs;
        private $films;
        private $roles;

        public function __construct($data){
                parent::hydrate($data, $this);
            }

        /**
         * Get the value of acteurs
         */ 
        public function getActeurs()
        {
                return $this->acteurs;
        }

        /**
         * Set the value of acteurs
         *
         * @return  self
         */ 
        public function setActeurs($acteurs)
        {
                $this->acteurs = $acteurs;

                return $this;
        }

        /**
         * Get the value of films
         */ 
        public function getFilms()
        {
                return $this->films;
        }

        /**
         * Set the value of films
         *
         * @return  self
         */ 
        public function setFilms($films)
        {
                $this->films = $films;

                return $this;
        }

        /**
         * Get the value of role
         */ 
        public function getRoles()
        {
                return $this->roles;
        }

        /**
         * Set the value of role
         *
         * @return  self
         */ 
        public function setRoles($roles)
        {
                $this->roles = $roles;

                return $this;
        }
        
    }