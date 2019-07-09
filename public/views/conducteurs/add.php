<?php ob_start(); ?>

<a href="<?= url('conducteurs') ?>" class="btn btn-sm btn-secondary"> < Retour à la liste des conducteurs</a>

<br /><br />

<form action="<?= url('conducteurs/add') ?>" method="post">

        <div class="form-group">
            <label for="conducteurNameForm">Nom du conducteur</label>
            <input type="text" name="nom" id="conducteurNameForm" class="form-control">
        </div>

        <div class="form-group">
            <label for="conducteurPrenomForm">Prénom du conducteur</label>
            <input type="text" name="prenom" id="conducteurPrenomForm" class="form-control">
        </div>

        <button class="btn btn-success float-right">Créer le conducteur</button>
        </form>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>