<?php

class Animal
{
    protected function deplacement (){
        return 'Je me deplace';
    }

    public function manger(){
        return 'Je mange';
    }
}


class Elephant extends Animal
{
    public function quiSuisJe(){
        return 'Je suis un elephant et ' . $this->deplacement();
        //Je peux appeler la methode deplacement avec this(objet de la classe pas encore cree) car la methode en tant que PROTECTES est accessivle par dans les classes heritieres
    }

}

class Chat extends Animal
{
    public function quiSuisJe(){
        return 'Je suis un chat';
    }

    public function manger(){ //redifinition de methode seulement pour la classe chat
        return 'Je mange  peu';

    }

}

//---------------
$eleph = new Elephant;
echo $eleph->manger() . '<br>';

$chat = new Chat;
echo $chat->manger() . '<br>';

//surchage: une classe enfant peut modifier en partie le comprtement d  une methode heritee(voir chapitre 6, fichier surcharge)

//L interpreteur regarde d abord si une methode existe dans la classse qui l'execute  puis la classe parent