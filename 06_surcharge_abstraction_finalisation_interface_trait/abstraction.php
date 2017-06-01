<?php

abstract class Joueur //creation d une class abstraite
{
    public function seConnecter(){
        return $this -> etreMajeur();
    }

    abstract public function etreMajeur();//une methode abstraite n a pas de contenu
}


class JoueurFr extends Joueur
{

    public function etreMajeur(){
        return 18;
    }
}

class JoueurUs extends Joueur
{
    public function etreMajeur(){
        return 21;
    }

}


$fr = new JoueurFr;
echo $fr -> seConnecter();

/*

une classe abstraite ne peut pas etre instancier
les methodes abstraite n ont pas de contenu
pour declarer une methode abstraite on doit  obligatoirement etre dans une classe abstraite
une classe abstraite peut cintenir des methdes mormales
lorsquon herite d une classe abstraite on f]doit OBLIGGATOIREMENT REDEFINIR lis methodes abstreaites

le developpeur maitre va obliger les autres dev a redefinir les methodes abstraites