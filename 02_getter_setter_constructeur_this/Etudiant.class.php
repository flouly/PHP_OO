<?php

class Etudiant
{
    private $prenom;


    public function __construct($prenom){//Methode magique qui s execute au moment de l instanciation
        $this->setPrenom($prenom);
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    
    public function getPrenom(){
        return $this->prenom;
    }

}

$etudiant = new Etudiant('frederic');

echo 'Prenom : ' . $etudiant->getPrenom();