<?php

require_once 'EFP.php';

class EFP_Prison extends EFP{

    private $NomRespFormation;
    private $NomPrison;
    private $nombreFormateurs;

    public function __construct($id,$nom,$addresse,$ville,$telepone,$email,$NombreStagiaire,$NomRespFormation,$NomPrison,$nombreFormateurs){

        parent::__construct($id,$nom,$addresse,$ville,$telepone,$email,$NombreStagiaire);

        $this -> NOMResponsableDeFormation = $NomRespFormation;
        $this -> NomPrison = $NomPrison;
        $this -> nombreFormateurs = $nombreFormateurs;

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
        return $this->nombreDeFormateurs;
    }

}