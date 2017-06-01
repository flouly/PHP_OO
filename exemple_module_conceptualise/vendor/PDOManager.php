<?php

// Ce fichier permet de r�cup�rer les infos de connexion (parameters) et un objet PDO qui sera la connexion � la BDD. SINGLETON !! 

class PDOManager 
{
	private static $instance = NULL; 
	private $pdo; //contiendra ma connexion � la BDD
	
	private function __construct(){}
	private function __clone(){}
	
	public static function getInstance(){
		if(is_null(self::$instance)){
			self::$instance = new self;
			// self::$instance = new PDOManager; // idem ! 
		}
		return self::$instance; 	
	}
	
	public function getPdo(){
		require __DIR__ . '/parameters.php';
		$this->pdo = new PDO('mysql:host=' . $parameters['host'] . ';dbname=' . $parameters['dbname'] , $parameters['login'], $parameters['password']);
		
		return $this->pdo; 
	}
}