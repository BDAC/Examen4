<?php ob_start(); ?>

<a href="<?= url('associations') ?>" class="btn btn-sm btn-secondary"> < Retour à l'inscription</a>

<br /><br />

    <form action="<?= url('associations/add') ?>" method="post">

        <div class="form-group">
            <label for="associationForm">Choix du conducteur</label>
            <select name="id_conducteur" id="associationForm" class="form-control">
                <option selected disabled>Modifier un conducteur...</option>

                <?php foreach ($conducteurs as $conducteur) : ?>
                    <option value="<?= $conducteur->getId() ?>"><?= $conducteur->getNom(); ?> (<?= $conducteur->getPrenom(); ?>)</option>
                <?php endforeach; ?>

            </select>
        </div>

        <div class="form-group">
            <label for="associationForm">Choix du vehicule</label>
            <select name="id_vehicule" id="associationForm" class="form-control">
                <option selected disabled>Modifier un vehicule...</option>

                <?php foreach ($vehicules as $vehicule) : ?>
                    <option value="<?= $vehicule->getId() ?>"><?= $vehicule->getMarque(); ?> (<?= $vehicule->getModele(); ?>)</option>
                <?php endforeach; ?>

            </select>
        </div>

        <button class="btn btn-warning float-right">Mettre à jour l'inscription</button>
    </form>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>