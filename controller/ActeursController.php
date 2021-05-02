<?php
namespace Controller;

use App\AbstractController;
use Model\Manager\ActeursManager;

    class ActeursController extends AbstractController
    {   
        public function __construct(){
        $this->manager = new ActeursManager();
    }
    
    public function index()
    {
        $acteurs = $this->manager->findAll();

        return $this->render("acteurs/home.php", [
            "acteurs" => $acteurs,
            "title"    => "Liste des Acteurs"
        ]);
    }

    public function voirActeur($id)
    {
        if($id){
            
            $Acteur = $this->manager->findOneById($id);
            $films = $this->manager->findFilmByActeur($id);
           

            return $this->render("acteurs/voir.php", [
                "acteur" => $Acteur,
                "title"   => $Acteur,
                "films" => $films,
        
            ]);
        }  
        else $this->redirectToRoute("acteurs", "index");
    }
}