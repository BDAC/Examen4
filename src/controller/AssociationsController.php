<?php
class AssociationsController{

    // Route: GET associations
    public function list(){
        $associations = Association::findAll();
        view('associations.list', compact('associations'));
    }

    // Route: GET associations/add
    public function add(){
        $conducteurs = Conducteur::findAll();
        $vehicules = Vehicule::findAll();
        view('associations.add', compact('conducteurs', 'vehicules'));
    }

    // Route: POST associations/add
    public function save(){
        $association = new Association;
        $association->setIdConducteur($_POST['id_conducteur']);
        $association->setIdVehicule($_POST['id_vehicule']);
        $association->save();
    }

    // Route: GET associations/$id/edit
    public function edit($id){
        $conducteurs = Conducteur::findAll();
        $vehicules = Vehicule::findAll();
        $association = Association::findOne($id);
        view('associations.edit', compact('association', 'conducteurs', 'vehicules'));
    }

    // Route: POST associations/$id/edit
    public function update($id){

    }

    // Route: GET associations/$id/delete
    public function delete($id){
        $association = Association::findOne($id);
        $association->delete();
    }

    // Route: GET associations/$id
    public function show($id){
        view('associations.show');
    }

}
