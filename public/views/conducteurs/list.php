<?php ob_start(); ?>

<a href="<?= url('conducteurs/add') ?>" class="btn btn-sm btn-primary">Ajouter un conducteur</a>

<br /><br />

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($conducteurs as $conducteur) : ?>
            <tr>
                <td><?= $conducteur->getId(); ?></td>
                <td><?= $conducteur->getNom(); ?></td>
                <td><?= $conducteur->getPrenom(); ?></td>
                <td><a href="<?= url('conducteurs/' . $conducteur->getId() . '/edit') ?>" class="btn btn-warning btn-sm">Éditer</a></td>
                <td><a href="<?= url('conducteurs/' . $conducteur->getId() . '/delete') ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>