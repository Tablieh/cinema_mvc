<?php
    namespace App;
    
    use Controller\HomeController;

    abstract class Router 
    {
        // private static $defaultCtrl = "entreprise";

        public static function handleRequest($get){

            $ctrlname = "Controller\HomeController";
            $method = "index";

            if(isset($get['ctrl'])){
                // ctrl = forum
                // Controller\ForumController
                $ctrlname = "Controller\\".ucfirst($get['ctrl'])."Controller";
            }
            
            if(class_exists($ctrlname)){
                // method = allTopics
                // $ctrl = new ForumController();
                $ctrl = new $ctrlname();
            } else $ctrl = new HomeController();

            if(isset($get['id'])){
                $id = $get['id'];
            } else $id = null;

            if(isset($get['action']) && method_exists($ctrl, $get['action'])){
                // $method = allTopics
                $method = $get['action'];
            }
            
            // ForumController->allTopics();
            // ForumController->findTopic($id)
            return $ctrl->$method($id);

        }

        public static function redirect($arrayRoute){

            $route = "Location:";

            $route.= "?ctrl=".$arrayRoute['ctrl'];
            $route.= $arrayRoute['method'] ? "&action=".$arrayRoute['method'] : "";
            $route.= $arrayRoute['param'] !== null ? "&id=".$arrayRoute['param'] : "";

            header($route);
            die;
        }
    }

    