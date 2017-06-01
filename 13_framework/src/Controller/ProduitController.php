<?php

namespace Controller;

use Controller\Controller;

class ProduitController extends Controller
{

    public function afficheAll(){
        $produits = $this -> getRepository() -> getAllProduits();
        $categories = $this ->getRepository() -> getAllCategories();

        $params = array(
            'produits' => $produits,  //iles indices sont importants pour l extract
            'categories' => $categories,
            'title' => 'boutique de mon site'
        );


        return $this -> render('layout.html', 'boutique.html', $params);
        //require(__DIR__ . '/../View/Produit/boutique.php');
        
    }

    public function affiche($id){
        $produit = $this -> getRepository() -> getProduitById($id);
        $suggestions = $this -> getRepository() -> getAllSuggestions($produit['categorie'], $produit['id_produit']);


                 $param = array(
                     'produit' => $produits,
                     'suggestions' => $suggeestions,
                     'title' => 'Fiche produit - ' . $produit['titre']
                 );


          return $this -> render('layout.html', 'fiche_produit.html', $params);
            //require(__DIR__ .'/../View/Produit/fiche_produit.php');
        
    }

    public function categorie($categorie){
        $produits = $this -> getRepository() -> getAllProduitsByCategorie($categorie);
        $categories = $this ->getRepository() -> getAllCategories();

        $params = array(
            'produits' => $produits,
            'categories' => $categories,
            'title' => 'Categorie' . $categorie 

        );
        $this -> render('layout.html', 'categorie.html', $params);
        //require(__DIR__ . '/../View/Produit/categorie.php');
       
    }




}