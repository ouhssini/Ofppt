<?php

class DirectionRegionale{

    private $id;
    private $nom;
    private $DirReg;
    private $address;
    private $telephone;
    private $list = array();

    public function __construct($id,$nom,$DirReg,$address,$telephone){

        $this-> id = $id;
        $this-> nom = $nom;
        $this-> DirectionRegionale = $DirReg;
        $this-> address = $address;
        $this-> telephone = $telephone;

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
        foreach ($this->list as $complex) {
            $nombreDeFormateurs += $complex->getNombreDeFormateur();
        }
        return $nombreDeFormateurs;
    }

}