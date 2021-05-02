<?php
namespace App;
use Model\Entity\Types;

$film = $result['data']['film'];
    $casting = $result['data']['casting'];
    $Type = $result['data']['Type'];
?>
<body>
    
    <h1><?= $film->getTitre() ?></h1>
    <img class="img" src="<?= $film->getImg() ?>" alt="img">
    <p>realisateur : <?= $film->getRealisateurs() ?></p>

    <p>Titre : <?= $film->getTitre() ?></p>
    <p>Annee_de_sortie: <?= $film->getAnneeDeSortie() ?></p>
    <p>Duree :<?= $film->getDuree() ?></p>
    <p class="uk-icon-link">  Note :<?= $film->getStar()?></p>
    <p class="Type">
    <p>TrailerLink:<a href="<?= $film->getTrailer() ?>" >  "<?= $film->getTrailer() ?>"</a></p>
    
    <iframe src="url(<?= $film->getTrailer() ?>)" frameborder="0" width="320" height="240" controls></iframe>
    <p>
    <?php
        
        foreach ($Type as $t ) { ?>
            Genres :  <?= $t ?>

            <?php }
    ?>
    </p>
    <h1 id="cast">Casting </h1>
    <div class="content">
    
    <p>
        
    <?php
        
        foreach ($casting as $c ) { ?>
            <td class="flex" >
            
                <img class="img" src="<?= $c->getActeurs()->getImages() ?>" alt="image">
                <?= $c->getActeurs() ?> Cast Role <?= $c->getRoles() ?>
            </td><br>
            

            <?php }
            
    ?>
    </p>
    </div>
    <div id="comment">
        <ul uk-accordion="multiple: true">
        <li class="uk-open">
            <a class="uk-accordion-title" href="#">comment 1</a>
            <div class="uk-accordion-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </li>
        <li class="uk-open">
            <a class="uk-accordion-title" href="#">comment 2</a>
            <div class="uk-accordion-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </li>
        <li class="uk-open">
            <a class="uk-accordion-title" href="#">comment 3</a>
            <div class="uk-accordion-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </li>
        </ul>
    </div><br>
    
    
</body>



