<?php ob_start(); ?>

<a href="<?= url('vehicules/add') ?>" class="btn btn-sm btn-primary">Ajouter un véhicule</a>

<br /><br />

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Couleur</th>
            <th>Plaque d'immatriculation</th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($vehicules as $vehicule) : ?>
            <tr>
                <td><?= $vehicule->getId(); ?></td>
                <td><?= $vehicule->getMarque(); ?></td>
                <td><?= $vehicule->getModele(); ?></td>
                <td><?= $vehicule->getCouleur(); ?></td>
                <td><?= $vehicule->getImmatriculation(); ?></td>
                <td><a href="<?= url('vehicules/' . $vehicule->getId() . '/edit') ?>" class="btn btn-warning btn-sm">Éditer</a></td>
                <td><a href="<?= url('vehicules/' . $vehicule->getId() . '/delete') ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>