<?php
    $roles = $result['data']['roles'];
?>

<h1>roles</h1>

<main id="roles-list">
    <table class="uk-table uk-table-striped">
        <thead>
            <tr>
                <th>roles</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($roles as $role) { ?>
                    <tr>
                        <td><a href="?ctrl=roles&action=voirRole&id=<?= $role->getId() ?>"><?= $role->getNomRole() ?></a></td>
                    </tr> 
            <?php }?>
        </tbody>
    </table>
</main>