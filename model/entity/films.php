<?php
   namespace Model\Entity;
   use App\AbstractEntity;

    class Films extends AbstractEntity
    {
        private $id;
        private $titre;
        private $AnneeDeSortie;
        private $duree;
        private $resume;
        private $note;
        private $realisateurs;
        private $roles;
        private $genres;
        private $acteurs;
        private $img;
        private $star;
        private $trailer;
        private $Available;
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
         * Get the value of titre
         */ 
        public function getTitre()
        {
                return $this->titre;
        }

        /**
         * Set the value of titre
         *
         * @return  self
         */ 
        public function setTitre($titre)
        {
                $this->titre = $titre;

                return $this;
        }

        /**
         * Get the value of duree
         */ 
        public function getDuree()
        {
                return $this->duree;
        }

        /**
         * Set the value of duree
         *
         * @return  self
         */ 
        public function setDuree($duree)
        {
                $this->duree = $duree;

                return $this;
        }

        /**
         * Get the value of resume
         */ 
        public function getResume()
        {
                return $this->resume;
        }

        /**
         * Set the value of resume
         *
         * @return  self
         */ 
        public function setResume($resume)
        {
                $this->resume = $resume;

                return $this;
        }

        /**
         * Get the value of note
         */ 
        public function getNote()
        {
                return $this->note;
        }

        /**
         * Set the value of note
         *
         * @return  self
         */ 
        public function setNote($note)
        {
                $this->note = $note;

                return $this;
        }


        /**
         * Get the value of AnneeDeSortie
         */ 
        public function getAnneeDeSortie()
        {
                return $this->annee_de_sortie->format("d-m-Y");
        }

        /**
         * Set the value of AnneeDeSortie
         *
         * @return  self
         */ 
        public function setAnneeDeSortie($AnneeDeSortie)
        {
                $this->annee_de_sortie = new \DateTime($AnneeDeSortie);

                return $this;
        }
       
        /**
         * Get the value of realisateur
         */ 
        public function getRealisateurs()
        {
                return $this->realisateurs;
        }

        /**
         * Set the value of realisateur
         *
         * @return  self
         */ 
        public function setRealisateurs($realisateurs)
        {
                $this->realisateurs = $realisateurs;

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

      

        /**
         * Get the value of genres
         */ 
        public function getGenres()
        {
                return $this->genres;
        }

        /**
         * Set the value of genres
         *
         * @return  self
         */ 
        public function setGenres($genres)
        {
                $this->genres = $genres;

                return $this;
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
        public function __toString()
        {
                return $this->getTitre()." ".$this->getAnneeDeSortie()." ".$this->getDuree()." ".$this->getResume()." ".$this->getNote()." ".$this->getAnneeDeSortie();
        }      

        /**
         * Get the value of img
         */ 
        public function getImg()
        {
                return $this->img;
        }

        /**
         * Set the value of img
         *
         * @return  self
         */ 
        public function setImg($img)
        {
                $this->img = $img;

                return $this;
        }

        /**
         * Get the value of star
         */ 
        public function getStar()
        {
               return str_repeat(' <a href="#" class="uk-icon-link" uk-icon="star" style="background-color: gray"></a>',$this->getNote()).str_repeat(' <a href="#" class="uk-icon-link" uk-icon="star" style="background-color: wihte"></a>',5- $this->getNote());
        }

        /**
         * Set the value of star
         *
         * @return  self
         */ 
        public function setStar($star)
        {
                $this->star = $star;

                return $this;
        }

        /**
         * Get the value of trailer
         */ 
        public function getTrailer()
        {
                return $this->trailer;
        }

        /**
         * Set the value of trailer
         *
         * @return  self
         */ 
        public function setTrailer($trailer)
        {
                $this->trailer = $trailer;

                return $this;
        }
        /**
         * Get the value of available
         */ 
        public function getAvailable()
        {
            return $this->available;
        }

        /**
         * Set the value of available
         *
         * @return  self
         */ 
        public function setAvailable($available)
        {
            $this->available = $available;

            return $this;
        }
}