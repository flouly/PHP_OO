<?php


//Les traits ne fonctionnent que sur du PHP 5.4
trait TPanier
{
    public $nbProduit = 1;

    public function affichageProduit(){
        return 'Affichage des produits dans le panier';
    }
}

trait TMembre
{
    public function affichageDesMembres(){
        return 'Affichage des membres';
    }
}

class Site
{
    use TPanier, TMembre;
    //use permet d importer le code contenu dans un ou plusieurs traits
}

$site = new Site;
echo $site -> affichageProduit();
echo $site -> affichageDesMembres();

/* 
les traits permettent d importer du code dans une classe
ils ont ete unventes pour repousser l heritage non multiple
un trait peut importer un trait
ume classe peut importer plusieurs traits
*/