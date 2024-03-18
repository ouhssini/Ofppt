<?php

class Ofppt {

    private $nom;
    private $addresse;
    private $telephone;
    private $email;
    private $formation = array();


    public function __construct($nom,$addresse,$telephone,$email){

        $this-> nom = $nom;
        $this-> addresse = $addresse;
        $this-> telephone = $telephone;
        $this-> email = $email;
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
        if(property_exists($this,$attr)){
            $this-> $attr = $value;
        }
        else{
            echo "l'attribut". $attr ."n'existe pas";
        }
    }
    public function getNombreDeFormateur() {
        $nombreDeFormateurs = 0;
        foreach ($this->formation as $complex) {
            $nombreDeFormateurs += $complex->getNombreDeFormateur();
        }
        return $nombreDeFormateurs;
    }



}