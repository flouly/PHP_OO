<?php

//surcharge ou override : permet de modifier le comportement d une methode heritee et d y apporter des traitements supplementaires

class A
{
    public function calcul(){
        return 10;
    }

}

class B extends A
{
    public function calcul(){
        return parent::calcul() + 5;//permet d appeler le comportement de la methode calcul telle que definie dans la classe parent
    }

}