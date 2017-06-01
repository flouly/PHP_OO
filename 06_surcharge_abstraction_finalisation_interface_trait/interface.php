<?php

interface Mouvement
{
    public function start();//les methodes n ont pas de contenu
    public function turnright();

}

class Bateau implements Mouvement
{
    public function start(); //OBLIGATION de definir toutes les methodes recuperes via l implementation
    public function turnright();
}

class Avion implements Mouvement
{
    public function start();
    public function turnright();
}

// c est une sorte de contrat pour garantir les  methodes de l' interface et la meme semantique
//une classe peut implementer pleudieurs interface et a la fois extends une autre classe
//les methodes doivent etre public sinon elles ne peuvent etre redefinies