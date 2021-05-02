<?php
namespace Controller;

use App\AbstractController;
use Model\Manager\FilmsManager;

    class FilmsController extends AbstractController
    {   
        public function __construct(){
        $this->manager = new FilmsManager();
    }

    public function index()
    {
        $films = $this->manager->findAll();

        return $this->render("films/home.php", [
            "films" => $films,
            "title"    => "Liste des Films"
        ]);
    }
    
    public function voirFilm($id)
    {
        if($id){
            
            $Film = $this->manager->findOneById($id);
            $casting = $this->manager->findcastingbyfilm($id);
            $Type = $this->manager->findTypebyfilm($id);

            return $this->render("films/voir.php", [
                "film" => $Film,
                "title"   => $Film,
                "casting" => $casting,
                "Type" => $Type
            ]);
        }  
        else $this->redirectToRoute("films", "index");
    }
    
}