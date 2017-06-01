<?php


class Maison
{
    public $couleur = 'blanc';
    public static $espaceTerrain = '500m2';
    private $nbPorte = 10;
    private static $nbPiece = 7;
    const HAUTEUR = '10m';

    public function getNbPorte(){
        return $this->nbPorte;
    }

    public static function getNbPiece(){
        return self::$nbPiece;
    }
}

echo 'Terrain :  ' . Maison::$espaceTerrain . '<br>';// ok je fais appel a un element appartenant  a la classe depuis la classe; l instanciation n est pas requise
echo 'Pieces : ' . Maison::getNbPiece() . '<br>';
echo 'Hauteur : ' . Maison::HAUTEUR . '<br>';//propriete constante appartenant a la classe



$maison = new Maison;
echo 'Couleur : ' . $maison->couleur . '<br>';

//echo 'Terrain : '  .  $maison->espaceTerrain  . '<br>';//j appelle un element appartenant a la classe par l objet , pas possible

echo 'Portes : ' . $maison->getNbPorte() . '<br>';


/*
$objet->    element d un objet a l exterieur de la classe
$this->                         a l interieur de la classe
Class::     element d une classe a la l exterieur de la classe
Self::                         a l interieur de la classe

2 questins a se poser

static?
    oui: suis je a l interieur de la classe
                oui : Self::
                non : Class::

    non : suis je a l interieur de la classe
                oui : $this->
                non : $objet->

                static signifie que l element appartient  a la classe
*/


