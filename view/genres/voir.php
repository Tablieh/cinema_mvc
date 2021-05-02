<?php
    $genre = $result['data']['genre'];
?>

<h1><?= $genre ?></h1>

<p>
type genres : <?= $genre->getNomGenres() ?>
</p>