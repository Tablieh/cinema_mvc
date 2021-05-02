<?php
namespace Controller;

use App\AbstractController;
use Model\Manager\RealisateursManager;

    class RealisateursController extends AbstractController
    {   
        public function __construct(){
        $this->manager = new RealisateursManager();
    }
  
    public function index()
    {
        $realisateurs = $this->manager->findAll();

        return $this->render("realisateurs/home.php", [
            "realisateurs" => $realisateurs,
            "title"    => "Liste des Realisateurs"
        ]);
    }

    public function voirRealisateur($id)
    {
        if($id){
            
            $Realisateur = $this->manager->findOneById($id);
            $films = $this->manager->findFilmByRealisateurs($id);

            return $this->render("realisateurs/voir.php", [
                "realisateur" => $Realisateur,
                "title"   => $Realisateur,
                "films" => $films
            ]);
        }  
        else $this->redirectToRoute("realisateurs", "index");
    }
    
    }