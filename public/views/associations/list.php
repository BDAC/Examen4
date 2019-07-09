<?php ob_start(); ?>

<a href="<?= url('associations/add') ?>" class="btn btn-sm btn-primary">Ajouter une association</a>

<br /><br />

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Conducteur (id)</th>
            <th>Vehicule (id)</th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($associations as $association) : ?>
            <tr>
                <td><?= $association->getId(); ?></td>
                <td><?= $association->getIdConducteur(); ?></td>
                <td><?= $association->getIdVehicule(); ?></td>
                <td><a href="<?= url('associations/' . $association->getId() . '/edit') ?>" class="btn btn-warning btn-sm">Éditer</a></td>
                <td><a href="<?= url('associations/' . $association->getId() . '/delete') ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>