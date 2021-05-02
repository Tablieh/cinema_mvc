<?php
    $genres = $result['data']['genres'];
?>

<h1>genres</h1>

<main id="genres-list">
    <table class="uk-table uk-table-striped">
        <thead>
            <tr>
                <th>genres</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($genres as $genre) { ?>
                    <tr>
                        <td><a href="?ctrl=genres&action=voirGenre&id=<?= $genre->getId() ?>"><?= $genre->getNomGenres() ?></a></td>
                    </tr>        
            <?php }?>
        </tbody>
    </table>
</main>