<?php
namespace Controller;
use App\AbstractController;
use Model\Manager\FilmsManager;

    class AdminController extends AbstractController
    {
        public function __construct(){
            $this->manager = new FilmsManager();
        }

        public function index(){
            $films = $this->manager->getTitre();

            return $this->render("admin/admin.php", [
                "films" => $films,
                "title"    => "Administration"
            ]);
        }

        public function addfilm(){
            if(isset($_POST["submit"])){
                $titre = filter_input(INPUT_POST, "titre", FILTER_SANITIZE_STRING);
                $duree = filter_input(INPUT_POST, "duree", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $resume = filter_input(INPUT_POST, "resume", FILTER_SANITIZE_STRING);
                $note = filter_input(INPUT_POST, "note", FILTER_SANITIZE_STRING);
                $img = filter_input(INPUT_POST, "img", FILTER_SANITIZE_STRING);
                $trailer = filter_input(INPUT_POST, "trailer", FILTER_SANITIZE_STRING);

                if($note&&$titre && $duree && $resume &&$note&&$img&&$trailer){
                    
                    if($this->manager->insertProduct( $titre,$duree, $resume, $note, $img , $trailer)){
                        \App\Session::addFlash('success', "Film ".$titre." ajouté en base de données !");
                    }
                    else{
                        \App\Session::addFlash('error', "Une erreur est survenue, contactez l'administrateur...");
                    }
                }
                else \App\Session::addFlash('error', "Tous les champs doivent être remplis et respecter leur format...");
            }
            else \App\Session::addFlash('error', "Petit malin, mais ça marche pas !! Nananèèèèreuh !");
            
            return $this->redirectToRoute("admin");
        }

        public function deletefilm($id){
            if($id){
                $titre = $this->manager->findOneById($id);
                if($this->manager->deletefilm($id)){
                    \App\Session::addFlash('success', "Le Film ".$titre->getTitre()." supprimé de la base de données !");
                }
                else{
                    \App\Session::addFlash('error', "Une erreur est survenue, contactez l'administrateur...");
                }
            }
            else \App\Session::addFlash('error', "Une erreur est survenue, contactez l'administrateur...");
            
            return $this->redirectToRoute("admin");
        }

        public function available($id){

            if($id){
                $titre = $this->manager->findOneById($id);
                if($titre->getAvailable()){
                    $this->manager->setAvailable($id, false);
                    \App\Session::addFlash('error', "Film desactivé !");
                }
                else{
                    $this->manager->setAvailable($id, true);
                    \App\Session::addFlash('success', "Film activé !");
                }
            }

            return $this->redirectToRoute("admin");
        }
    }