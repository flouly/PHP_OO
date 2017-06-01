<?php
session_start();

require_once(__DIR__ . '/../vendor/autoload.php');

if(isset($_GET['controller']) && !empty($_GET['controller']) && isset($_GET['action']) && !empty($_GET['action'])){
    $controller = 'Controller\\' . ucfirst($_GET['controller']) . 'Controller';
    if(file_exists(__DIR__ . '/../src/Controller/' . ucfirst($_GET['controller']) . 'Controller.php')) {
        $a = new $controller;
        $action = strtolower($_GET['action']);
        if(method_exists($a, $action)){
            if(isset($_GET['id'])){
                $id = (int)  $_GET['id'];
                $a -> $action($id);
            } elseif(isset($_GET['categorie'])) {
                $cat = (string) $_GET['categorie'];
                $a -> $action($cat);
            } else{
                $a -> $action;
            }
        }
    }
}
else {
    $a = new Controller\ProduitController;
    $a -> afficheAll();
}

//TEST 1 : ENTITY produit

//$produit = new Entity\Produit;
//$produit -> setTitre('Mon produit');
//echo $produit -> getTitre();

//TEST 2:PDO Manager
//$pdom= Manager\PDOManager::getInstance();
//$resultat = $pdom -> getPdo() ->query("SELECT * FROM produit");
//$produits = $resultat -> fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; 
//print_r($produits);
//echo '</pre>';

/*//TEST3: EntityRepository
$er = new Manager\EntityRepository;

//$resultat = $er -> find(2);

//echo '<pre>'; 
//print_r($resultat);
//echo '</pre>';

$produit = array(
    "id_produit" => NULL,
    "reference" => "dssllll",
    "categorie" => "pantalon",
    "titre" => "puhkbjb",
    "prix" => "17",
    "taille" => "S",
    "stock" => "20",
    "public" => "m",
    "Photo" => "uhhh.jpeg",
    "description" => "jkhkhkjgg",
    "couleur" => "rouge"
);

$resultat = $er -> register($produit);

//TEST4 : ProduitRepository

$pr = new Repository\ProduitRepository;
$produits = $pr -> getAllSuggestions('pull', 2);

echo '<pre>'; 
print_r($produits);
echo '</pre>';*/

//TEST5

//$pc = new Controller\ProduitController;
//$pc -> afficheAll();
//$pc -> affiche(2);
//$pc -> categorie('pull');