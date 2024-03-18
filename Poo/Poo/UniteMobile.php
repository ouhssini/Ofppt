<?php

include 'EFP.php';

class UntieMobile extends EFP{

    private $nomFormateur;


    public function __construct($id,$nom,$addresse,$ville,$telepone,$email,$NombreStagiaire,$nomFormateur){

        parent::__construct($id,$nom,$addresse,$ville,$telepone,$email,$NombreStagiaire);

        $this -> nomFormateur = $nomFormateur;
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

    public function getNombreDeFormateur(){
        return 1;
    }
}