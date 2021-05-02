<?php
    $acteur = $result['data']['acteur'];
    $films = $result['data']['films'];
?>

<h1><?= $acteur ?></h1>
                        <p>Prenom : <?= $acteur->getPrenom() ?></p>
                        <p>Sexe: <?= $acteur->getSexe() ?></p>
                        <p>Date_de_naissance :<?= $acteur->getDateDeNaissance() ?></p>
                        <p class="films">
                        <?php
                            
                            foreach ($films as $f ) { ?>
                                <td > The name of The Film <?= $f->getTitre() ?></td><br>

                                <?php }
                        ?>
                        </p>