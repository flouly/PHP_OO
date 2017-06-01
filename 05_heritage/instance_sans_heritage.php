<?php

class C
{

}

class A
{
    public function bonjour(){
        return 'Bonjour';
    }
}


class B extends C
{
    public $maVariable;
    
    public function __construct(){
        $this->maVariable = new A;
        //au moment de l instanciation de B, on met dans $maVariable un objet de classe A
    }
}

$b = new B;
echo $b->maVariable->bonjour();

/*
nous avons un objet dans un objet
Cela detourne  la non multiplicite de l heritage en PHP

*/