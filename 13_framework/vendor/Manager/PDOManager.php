<?php
namespace Manager;
use PDO;//ON recuper la class PDO appartenant a l espace global de PHP. sams cela noud devrions appeler PDO comme cela: \PDO pour sortir de le espace manager

class PDOManager
{
    private static $instance = NULL;
    protected $pdo; //

    private function __construct(){}// function private donc notre class n est plus instanciable

    private function __clone(){}//fonction private donc la classe n est pas clonable

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self;
        }
        return self::$instance;
    }
    
    public function getPdo(){
        include_once(__DIR__ . '/../../app/Config.php');
        $config = new \Config;
        $connect = $config -> getParametersConnect();
    
    
        try{
            $this -> pdo  = new PDO('mysql:host=' . $connect['host'] . ';dbname=' . $connect['dbname'], $connect['login'], $connect['password'],array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'  
            ));

        }
        catch(PDOException $e){
            echo '<div>';
            echo 'vous avez une erreur de connection a la BDD <br>';
            echo '<b><u>Message</u></b>'  . $e -> getMessage();
            echo '<b><u>Fichier</u></b>' . $e -> getFichier();           
            echo '<b><u>Ligne</u></b>'  . $e -> getLine();                                     
            
            echo '</div>';


        }
        return $this -> pdo;
    }
}