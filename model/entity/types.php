<?php
      namespace Model\Entity;
      use App\AbstractEntity;

    class Types extends AbstractEntity
    {
        private $genres;
        private $films;

        

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
    }