<?php ob_start(); ?>

<a href="<?= url('conducteurs') ?>" class="btn btn-sm btn-secondary"> < Retour aux conducteurs</a>

<br /><br />

    <form action="<?= url('conducteurs/' . $conducteur->getId() . '/edit') ?>" method="post">

        <div class="form-group">
            <label for="conducteurNameForm">Nom du conducteur</label>
            <input type="text" name="nom" id="conducteurNameForm" class="form-control" value="<?= $conducteur->getNom() ?>">
        </div>

        <div class="form-group">
            <label for="conducteurPrenomForm">Prénom du conducteur</label>
            <input type="text" name="prenom" id="conducteurPrenomForm" class="form-control" value="<?= $conducteur->getPrenom() ?>">
        </div>

        <button class="btn btn-warning float-right">Mettre à jour le conducteur</button>
    </form>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>