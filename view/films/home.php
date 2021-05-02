<?php
    $films = $result['data']['films'];
?>

<h1>Films</h1>

<main id="films-list">
    <table class="uk-table uk-table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Annee_de_sortie</th>
                <th>Duree </th>
                <th>Resume </th>
                <th>Note </th>
                <th>Realisateurs</th>
                <th>supr&add</th>
            </tr>
        </thead>
        <tbody>
        
            <?php
                foreach ($films as $film) { ?>
                    <tr>
                        <td><a href="?ctrl=films&action=voirFilm&id=<?= $film->getId() ?>"><?= $film->getTitre()?></a></td>
                        <td><?= $film->getAnneeDeSortie() ?></td>
                        <td ><?= $film->getDuree() ?></td>
                        <td><?= $film->getResume() ?></td>
                        <td class="uk-icon-link">  Note :<?= $film->getStar()?></td>
                        <td><?= $film->getRealisateurs() ?></td>
                        <td>
                        <a href="#" class="uk-icon-link" uk-icon="trash"></a>
                        <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="file-edit"></a>
                        </td>
                    </tr>    
                    <?php  } ?>    
        </tbody>
    </table>
</main>