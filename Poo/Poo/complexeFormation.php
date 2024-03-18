<?php

class ComplexFormation{

    private $id;
    private $nom;
    private $directeur;
    private $complexe = array();


    public function __construct($id,$nom,$directeur){
        $this-> id = $id;
        $this-> nom = $nom;
        $this-> directeur = $directeur;


    }
    public function __get($attr){
        if(property_exists($this,$attr)){
            return $this -> $attr;
        }
        else{
            echo "l'attribut". $attr ."n'existe pas";
        }
    }

    public function __set($attr,$value){
        if ($attr !== 'id'){
            if (property_exists($this, $attr)){
                $this->$attr = $value;
            }
            else{
                echo 'Attribut ' . $attr . ' n\'existe pas';
            }
        }
    }
    public function getNombreDeFormateur() {
        $nombreDeFormateurs = 0;
        foreach ($this->complexe as $efp) {
            $nombreDeFormateurs += $efp->getNombreDeFormateur();
        }
        return $nombreDeFormateurs;
    }
}