<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />

    <link rel="stylesheet" href="./public/css/style.css">
    <title>Cinema MVC</title>
</head>
<body> 
    <nav class="uk-navbar-container" uk-navbar>
        <a class="uk-navbar-item uk-logo" href="index.php">Cinema MVC</a>

        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li class="uk-navbar-item"><a href="?ctrl=acteurs">acteurs</a></li>
                <li class="uk-navbar-item"><a href="?ctrl=films">FILMS</a></li>
                <li class="uk-navbar-item"><a href="?ctrl=genres">GENRES</a></li>
                <li class="uk-navbar-item"><a href="?ctrl=realisateurs&action=index">REALISATEURS</a></li>
                <li class="uk-navbar-item"><a href="?ctrl=roles&action=index">ROLE</a></li>
                <?php
                
                    if(App\Session::hasRole("ROLE_ADMIN")){
                        ?>
                        <li class="uk-navbar-item">
                            <a href='?ctrl=admin'>Administration</a>
                        </li>
                        <?php
                    }
                ?>
                <li class="uk-navbar-item">
                <?php
                    if(App\Session::getUser()){
                        ?>
                            <a href='?ctrl=security&action=profile'><?= App\Session::getUser()->getEmail() ?></a>
                            <a href='?ctrl=security&action=logout'>Déconnexion</a>
                        <?php
                    }
                    else{
                        ?>
                            <a href='?ctrl=security&action=register'>Inscription</a>
                            <a href='?ctrl=security&action=login'>Connexion</a>
                        <?php
                    }
                ?>
            </ul>
        </div>  
    </nav>
    <div class="uk-container">
    
        <section id="messages" uk-alert class="uk-padding-remove">
            <?= APP\Session::getFlashes() ?>
        </section>
    </div>

    <div class="uk-container">
        <?= $page //ici s'intègrera la page que le contrôleur aura renvoyé !!?> 
    </div>

    <footer>
        <p class='uk-text-center'>&copy; 2021 - Cenima !!</p>
    </footer>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
</body>
</html>
    