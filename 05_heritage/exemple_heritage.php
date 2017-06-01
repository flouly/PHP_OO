<?php

class Membre
{
    public $id_membre;
    public $pseudo;
    public $email;

    public function inscription(){
        return 'Je m\'inscript';
    }

    public function connexion(){
        return 'Je me connecte';
    }

}
//--------------------pas 2 classes dans le meme fichier, ici pour la comprehension
class Admin extends Membre//herite de
{

//Tout le code de membre est ici

    public function accesBackOffice(){
        return 'J\' acces au backoffice';
    }

}

//----------------------

$admin = new Admin;
echo $admin->inscription() . '<br>';

/*
Dans notre site , un Admin est avant tout un membre avec quelques fonctionnalites supplementaires
*/