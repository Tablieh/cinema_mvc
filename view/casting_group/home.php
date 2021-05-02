<?php
    $acteurs = $result['data']['acteurs'];
?>

<h1>acteurs</h1>

<main id="acteurs-list">
    <table class="uk-table uk-table-striped">
        <thead>
            <tr>
                <th>Name Complete</th>
                <th>prenom</th>
                <th>sexe </th>
                <th>date_de_naissance </th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($acteurs as $acteur) { ?>
                    <tr>
                        <td><a href="?ctrl=acteurs&action=voirActeur&id=<?= $acteur->getId() ?>"><?= $acteur ?></a></td>
                        <td><?= $acteur->getPrenom() ?></td>
                        <td><?= $acteur->getSexe() ?></td>
                        <td><?= $acteur->getDate_de_naissance() ?></td>
                    </tr>        
            <?php }?>
        </tbody>
    </table>
</main>