<?php

//Design pattern:

// Le Singleton est la reponse a la question :comment creer une classe qui ne sera instanciable qu une seule et unique fois

class Singleton
{
    private static $instance = NULL;

    private function __construct(){}// function private donc notre class n est plus instanciable

    private function __clone(){}//fonction private donc la classe n est pas clonable
    
    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new Singleton; //je mets dans la propriete $instance un objet de la classe self/Singleton
            //self::$instance = new self;
        }
        return self::$instance;
    }

    
}

//$singleton = new Singleton; //IMPOSSIBLE d instancier notre classe en dehors de la classe

$objet = Singleton::getInstance();

$objet2 = Singleton::getInstance();


var_dump($objet);
var_dump($objet2);

// le singleton est notemment utilise pour la connection a la BDD  
