<?php  
namespace Model\Entity;
   use App\AbstractEntity;


    class Acteurs extends AbstractEntity
    {
        private $id;
        private $nom;
        private $prenom;
        private $sexe;
        private $DateDeNaissance;
        private $images;

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
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of sexe
         */ 
        public function getSexe()
        {
                return $this->sexe;
        }

        /**
         * Set the value of sexe
         *
         * @return  self
         */ 
        public function setSexe($sexe)
        {
                $this->sexe = $sexe;

                return $this;
        }

        /**
         * Get the value of DateDeNaissance
         */ 
        public function getDateDeNaissance()
        {
                return $this->date_de_naissance->format("d-m-Y");
        }

        /**
         * Set the value of DateDeNaissance
         *
         * @return  self
         */ 
        public function setDateDeNaissance($DateDeNaissance)
        {
                $this->date_de_naissance = new \DateTime($DateDeNaissance);

                return $this;
        }
        public function __toString()
        {
                return $this->getNom()." ".$this->getPrenom();
        }

      


        /**
         * Get the value of image
         */ 
        public function getImages()
        {
                return $this->images;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImages($images)
        {
                $this->images = $images;

                return $this;
        }
}