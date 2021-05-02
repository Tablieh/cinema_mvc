<?php
    $realisateurs = $result['data']['realisateurs'];
?>

<h1>realisateurs</h1>

<main id="realisateurs-list">
    <table class="uk-table uk-table-striped">
        <thead>
            <tr>
                <th>Names realisateurs</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($realisateurs as $realisateur) { ?>
                    <tr>
                        <td><a href="?ctrl=realisateurs&action=voirRealisateur&id=<?= $realisateur->getId() ?>"><?= $realisateur->getNomRealisateur() ?></a></td>
                    </tr>        
            <?php }?>
        </tbody>
    </table>
</main>