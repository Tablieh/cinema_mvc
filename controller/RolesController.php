<?php
namespace Controller;

use App\AbstractController;
use Model\Manager\RolesManager;
    class RolesController extends AbstractController
    {   
        public function __construct(){
        $this->manager = new RolesManager();
    }
     
    public function index()
    {
        $roles = $this->manager->findAll();
       
        return $this->render("roles/home.php", [
            "roles" => $roles,
            "title"    => "Liste des Roles"
            
        ]);
    }

    public function voirRole($id)
    {
        if($id){
            
            $Role = $this->manager->findOneById($id);
            $films = $this->manager->findFilmByRoles($id);
            $casting = $this->manager->findActeursByRoles($id);
            return $this->render("roles/voir.php", [
                "role" => $Role,
                "title"   => $Role,
                "films" => $films,
                "casting" => $casting
            ]);
        }  
        else $this->redirectToRoute("roles", "index");
    }
    }