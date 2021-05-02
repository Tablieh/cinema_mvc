<?php
      namespace Model\Entity;
      use App\AbstractEntity;

    class Roles extends AbstractEntity
    {
        private $id;
        private $NomRole;

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
         * Get the value of NomRole
         */ 
        public function getNomRole()
        {
                return $this->NomRole;
        }

        /**
         * Set the value of NomRole
         *
         * @return  self
         */ 
        public function setNomRole($NomRole)
        {
                $this->NomRole = $NomRole;

                return $this;
        }
        public function __toString()
        {
                return $this->getNomRole();
        }
        
}