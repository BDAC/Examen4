<?php ob_start(); ?>

<a href="<?= url('vehicules') ?>" class="btn btn-sm btn-secondary"> < Retour au cours</a>

<br /><br />

    <form action="<?= url('vehicules/edit') ?>" method="post">

        <div class="form-group">
            <label for="vehiculeMarqueForm">Marque</label>
            <input type="text" name="marque" id="vehiculeMarqueForm" class="form-control">
        </div>

        <div class="form-group">
            <label for="VehiculeModeleForm">Modèle</label>
            <input type="text" name="modele" id="VehiculeModeleForm" class="form-control">
        </div>

        <div class="form-group">
            <label for="VehiculeCouleurForm">Couleur</label>
            <input type="text" name="couleur" id="VehiculeCouleurForm" class="form-control">
        </div>

        <div class="form-group">
            <label for="VehiculeImmatriculationForm">Plaque d'immatriculation</label>
            <input type="text" name="immatriculation" id="VehiculeImmatriculationForm" class="form-control">
        </div>

        <button class="btn btn-warning float-right">Mettre à jour le cours</button>
    </form>

    <?php $content = ob_get_clean() ?>
    <?php view('template', compact('content')); ?>