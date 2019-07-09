<?php
class Conducteur extends Db
{
    const TABLE_NAME = "conducteur";
    protected $id;
    protected $nom;
    protected $prenom;

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function setNom($nom){

            if (strlen($nom) < 1) {
                throw new Exception('Attention, le champ est vide.');
            }
        $this->nom = $nom;
        return $this;
    }

    public function setPrenom($prenom){
        
            if (strlen($prenom) < 1) {
                throw new Exception('Attention, le champ est vide.');
            }
        $this->prenom = $prenom;
        return $this;
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function save(){
        $data = [
            "nom"      => $this->getNom(),
            "prenom"   => $this->getPrenom(),
        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public static function findAll(){
        $data = Db::dbFind(self::TABLE_NAME);

        $conducteurs = [];
        foreach ($data as $d) {
            $conducteur = new Conducteur;
            $conducteur->setId($d['id']);
            $conducteur->setNom($d['nom']);
            $conducteur->setPrenom($d['prenom']);

            $conducteurs[] = $conducteur;
        }
        return $conducteurs;
    }

    public static function findOne(int $id)
    {
        $request = [
            ['id', '=', $id]
        ];
        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;
        $conducteur = new Conducteur;
        $conducteur->setId($element['id']);
        $conducteur->setNom($element['nom']);
        $conducteur->setPrenom($element['prenom']);
        
        return $conducteur;
    }

}