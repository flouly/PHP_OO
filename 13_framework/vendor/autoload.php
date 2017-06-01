<?php

class Autoload
{

    public static function className($nom_de_la_classe){
        //$pc = new Controller\produitController;
       // require 'Controller/produitController.php';

       $tab = explode('\\', $nom_de_la_classe);

       if($tab[0] == 'Controller' && $tab[1] != 'Controller'){
           $path = __DIR__ . '/../src/' . implode('/', $tab) . '.php';
       } else{
           $path = __DIR__ . '/' . implode('/', $tab) . '.php';
       }
       require $path;

       //echo '<pre>Autoload :' . $nom_de_la_classe . '<br>';
       //echo '=> ' . $path . '</pre></hr>';
    }

}




spl_autoload_register(array('Autoload', 'className'));
// en POO " a besoin du nom de la classe et de la methode a executer.on passe donc un array
//ATTENTION , notre methode doit etre OBLIGATOIREMENT static