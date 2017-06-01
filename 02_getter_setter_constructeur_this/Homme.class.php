<?php

class Homme
{
    private $prenom;
    private $nom;


    public function setPremom($arg){
        if(!empty($arg) && is_string($arg) && strlen($arg) > 3 && strlen($arg) < 20){
            $this->prenom = $arg;
        }
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setNom($arg){
        if(!empty($arg) && is_string($arg) && strlen($arg) > 3 && strlen($arg) < 20){
            $this->nom = $arg;
        }
    }

    public function getNom(){
        return $this->nom;
    }
}

//-------------------------
$homme = new Homme;
//$homme->prenom = 'Fred';//ERREUR private

$homme->setPrenom('Fred');
echo 'Prenom : ' . $homme-> getPrenom() . '<br>';

/*
le PHP est un langage qui ne type pas ses variables.il faut systematiquement controler l integrite des donnees renseignees
Donc utiliser la visisibilte PRIVATE est une tres bomme contrawinte.tout dev devra obligatoirment passer par le setter pour affecter une valeur et donc par les controles

on aura autant de getter et setter que de proprietes privates
$this represente, al l interieur de la classe, l objet en cours de manipulation