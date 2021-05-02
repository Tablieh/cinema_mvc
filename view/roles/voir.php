<?php
    $role = $result['data']['role'];
    $films = $result['data']['films'];
    $casting = $result['data']['casting'];
?>

                        <h1><?= $role ?></h1>

                        <p>
                            role : <?= $role->getNomRole() ?>
                        </p>
                        <p class="films">
                        <?php
                            
                            foreach ($films as $f ) { ?>
                                <td > The name of The Film <?= $f->getTitre() ?></td><br>

                                <?php }
                        ?>
                        </p>
                        <p class="films">
                        <?php
                            foreach ($casting as $c ) { ?>
                                <td > The Role is <?= $c->getRoles() ?> Played by <?= $c->getActeurs()?> </td><br>
                                <?php }
                        ?>
                        </p>