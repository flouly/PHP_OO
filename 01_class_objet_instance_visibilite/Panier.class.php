<?php

class Panier
{
    public $nbProduit;

    public function ajouterproduit(){
            return 'L\'article a ete ajoute';
    }

    protected function retirerProduit(){
            return 'L\'article a ete retire';
    }

    private function affichageProduit(){
            return 'Les articles du panier';
    }
}


$panier = new Panier;

var_dump($panier);
var_dump(get_class_methods($panier));

$panier->nbProduit = 5;
echo '<pre>';
var_dump($panier);
echo '</pre>';

echo 'panier :' . $panier->ajouterProduit()  . '<br>';
//echo 'panier :' . $panier -> retirerProduit()  . '<br>';//impossible d acceder a un element protected a l exterieur de la classe

//echo 'panier :' . $panier -> affichageProduit()  . '<br>';//impossible d acceder a un element private a l exterieur de la classe

$panier2 = new Panier;

echo '<pre>';
var_dump($panier2);
echo '</pre>';


/*

Instanciation  d un objet :on utilise le mot cle "new" affecte a une class

niveau de visibilite:
    public : accessible de partout
    private : accessible UNIQUEMENT depuis  la classe ou  l element a ete declare 
    protected : accessible depuis  la classe ou  l element a ete declare ainsi que depuis les classes heritieres



*/