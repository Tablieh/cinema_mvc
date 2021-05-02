<?php
    $acteur = $result['data']['acteur'];
?>

<h1><?= $acteur ?></h1>
                        <p>Prenom : <?= $acteur->getPrenom() ?></p>
                        <p>Sexe: <?= $acteur->getSexe() ?></p>
                        <p>Date_de_naissance :<?= $acteur->getDate_de_naissance() ?></p>