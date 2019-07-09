<?php
class Association extends Db
{
    const TABLE_NAME = "association";
    protected $id;
    protected $id_conducteur;
    protected $id_vehicule;

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function setIdConducteur($id_conducteur){

            if (strlen($id_conducteur) < 1) {
                throw new Exception('Attention, le champ est vide.');
            }
        $this->id_conducteur = $id_conducteur;
        return $this;
    }

    public function setIdVehicule($id_vehicule){

            if (strlen($id_vehicule) < 1) {
                throw new Exception('Attention, le champ est vide.');
            }
        $this->id_vehicule = $id_vehicule;
        return $this;
    }

    public function getId(){
        return $this->id;
    }

    public function getIdConducteur(){
        return $this->id_conducteur;
    }

    public function getIdVehicule(){
        return $this->id_vehicule;
    }

    public function save(){
        $data = [
            "id_conducteur"    => $this->getIdConducteur(),
            "id_vehicule"      => $this->getIdVehicule(),
        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public function delete(){
        $data = [
            'id' => $this->getId(),
        ];
        Db::dbDelete(self::TABLE_NAME, $data);
        return;
    }

    public static function findAll(){
        $data = Db::dbFind(self::TABLE_NAME);

        $associations = [];
        foreach ($data as $d) {
            $association = new Association;
            $association->setId($d['id']);
            $association->setIdConducteur($d['id_conducteur']);
            $association->setIdVehicule($d['id_vehicule']);

            $associations[] = $association;
        }
        return $associations;
    }

    public static function findOne(int $id)
    {
        $request = [
            ['id', '=', $id]
        ];
        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;
        $association = new Association;
        $association->setId($element['id']);
        $association->setIdConducteur($element['id_conducteur']);
        $association->setIdVehicule($element['id_vehicule']);
        return $association;
    }

}