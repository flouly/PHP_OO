<?php


//Transitivite de extends
class A
{
    public function testA(){
        return 'testA';
    }
}


class B extends A
{
     public function testB(){
        return 'testB';
     }
}

class C extends B
{
     public function testC(){
        return 'testC';
     }

}

//-----------
$c = new C;
echo $c->testA() . '<br>';
echo $c->testB() . '<br>';
echo $c->testC() . '<br>';

var_dump(get_methods($c));//Affiche les 3 methodes car appartiennent toutes a C

//Transitivite : heritage indirect

/*
L ' heritage est  :
    non reflexive ; D extends D
    non symetrique; F extends E ne signifie pas E extends F
    sans cycle;   "    ne peut signifier    "
    non multiple; N extends M, P     IMPOSSIBLE

    UNE classe parent ne peut avoir un nombre infini d heritier
    */