<?php

abstract class EFP{
    protected $id;
    protected $nom;
    protected $addresse;
    protected $ville;
    protected $telephone;
    protected $email;
    protected $NombreStagiaire;


    public function __construct($id,$nom,$addresse,$ville,$telepone,$email,$NombreStagiaire){

        $this-> id =$id;
        $this-> nom =$nom;
        $this-> addresse =$addresse;
        $this-> ville =$ville;
        $this-> telephone =$telephone;
        $this-> email =$email;
        $this-> nombreStagiaire =$NombreStagiaire;

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

    abstract public function getNombreDeFormateur();




}