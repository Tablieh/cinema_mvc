<?php

    namespace Controller;
    use App\AbstractController;

    class HomeController extends AbstractController {

        public function index()
        {
            return $this->render("home/home.php", []);
        }
    }