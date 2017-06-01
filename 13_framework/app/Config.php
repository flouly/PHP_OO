<?php

class Config
{
    protected $parameters;

    public function __construct(){
        require __DIR__ .'/Config/parameters.php'; //dossier dans lequel je suis en terme absolu 
        $this -> parameters = $parameters;
    }

    public function getParametersConnect(){
        return $this -> parameters['connect'];
        //cette methode va seulement recuperer les parametres connect de config
    }
}

//-------------
//$config = new Config;
//echo '<pre>';
//print_r($config -> getParametersConnect());
//echo '</pre>';
