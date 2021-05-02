<?php
    namespace App;
    use App\Router;

    require_once "app\Autoloader.php";
    Autoloader::register();

    session_start();

    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT_DIR', '.'.DS); // "./"
    define('PUBLIC_PATH', ROOT_DIR.'public'.DS); // "./public/"
    define('CSS_PATH', PUBLIC_PATH.'css'.DS); // "./public/css/"
    define('IMG_PATH', PUBLIC_PATH.'img'.DS); // "./public/img/"
    define('JS_PATH', PUBLIC_PATH.'js'.DS); // "./public/js/"

    define('SERVICE_PATH', ROOT_DIR.'app'.DS); // "./app/"
    define('CTRL_PATH', ROOT_DIR.'controller'.DS); // "./controller/"
    define('VIEW_PATH', ROOT_DIR.'view'.DS); // "./view/"

    define('ADMIN_MAIL', "admin@mvc.com"); //mail de l'administrateur


    $result = Router::handleRequest($_GET);

    \ob_start();

    include $result['view'];
    $page = ob_get_contents();

    \ob_end_clean();
    
    include VIEW_PATH."layout.php";