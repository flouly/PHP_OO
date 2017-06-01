<?php

class Societe
{
    public $adresse;
    public $ville;
    public $cp;

    public function __construct(){}

    public function __set($nom, $valeur){
        echo '<p>la propriete n existe pas dans cette classe</p>';
    }//s ezecute au  moment ou on essaie d affecter une valeur a une propriete qui n existe pas

    public function __get($nom){
        echo '<p>la propriete n existe pas dans cette classe</p>';
    }
}


//-----------------------
$societe = new Societe;
$societe -> pays = 'France';

$societe -> titre;


/*
__call() quand j appelle  um methode qui n existe pas
__callstatic()
__isset()
__destruct()
__toString()
__wakeup(), __sleep(), __invoke(), __clone()...
*/
