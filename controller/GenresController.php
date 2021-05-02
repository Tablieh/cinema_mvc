<?php
namespace Controller;

use App\AbstractController;
use Model\Manager\GenresManager;

    class GenresController extends AbstractController
    {   
        public function __construct(){
        $this->manager = new GenresManager();
    }
  
    public function index()
    {
        $genres = $this->manager->findAll();

        return $this->render("genres/home.php", [
            "genres" => $genres,
            "title"    => "Liste des Genres"
        ]);
    }

    public function voirGenre($id)
    {
        if($id){
            
            $genre = $this->manager->findOneById($id);

            return $this->render("genres/voir.php", [
                "genre" => $genre,
                "title"   => $genre
            ]);
        }  
        else $this->redirectToRoute("genres", "index");
    }
    }