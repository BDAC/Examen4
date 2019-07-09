<?php ob_start(); ?>

<a href="<?= url('vehicules') ?>" class="btn btn-sm btn-secondary"> < Retour aux véhicules</a>

<br /><br />

    <form action="<?= url('vehicules/' . $vehicule->getId() . '/edit') ?>" method="post">

        <div class="form-group">
            <label for="vehiculeMarqueForm">Marque</label>
            <input type="text" name="marque" id="vehiculeMarqueForm" class="form-control" value="<?= $vehicule->getMarque() ?>">
        </div>

        <div class="form-group">
            <label for="VehiculeModeleForm">Modèle</label>
            <input type="text" name="modele" id="vehiculeModeleForm" class="form-control" value="<?= $vehicule->getModele() ?>">
        </div>

        <div class="form-group">
            <label for="VehiculeCouleurForm">Couleur</label>
            <input type="text" name="couleur" id="VehiculeCouleurForm" class="form-control" value="<?= $vehicule->getCouleur() ?>">
        </div>

        <div class="form-group">
            <label for="VehiculeImmatriculationForm">Plaque d'immatriculation</label>
            <input type="text" name="immatriculation" id="VehiculeImmatriculationForm" class="form-control" value="<?= $vehicule->getImmatriculation() ?>">
        </div>

        <button class="btn btn-warning float-right">Mettre à jour le cours</button>
    </form>

    <?php $content = ob_get_clean() ?>
    <?php view('template', compact('content')); ?>