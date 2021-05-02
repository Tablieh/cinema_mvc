<?php
    $realisateur = $result['data']['realisateur'];
    $films = $result['data']['films'];
?>

<h1><?= $realisateur ?></h1>

<p>
    Nom_realisateur : <?= $realisateur->getNomRealisateur() ?>
</p>
<p class="films">
<?php
    
    foreach ($films as $f ) { ?>
        <td > The name of The Film <?= $f->getTitre() ?></td><br>

        <?php }
?>
</p>