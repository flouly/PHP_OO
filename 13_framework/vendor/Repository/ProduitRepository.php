<?php

namespace Repository;

use Manager\EntityRepository; //tres important car l heritage ne permet pas de charger le fichier
use PDO;

class ProduitRepository extends EntityRepository
{
    public function getAllProduits(){  //on renomme juste les function de EntityRepository pour que se soit plus claire
        return $this -> findAll();
    }

    public function getProduitById($id){
        return $this -> find($id);
    }

    public function deleteProduitById($id){
        return $this -> delete($id);
    }

    public function registerProduit($infos){
        return $this -> register ($infos);
    }

// requete specifique a cette  entite produit

    public function getAllCategories(){
        $requete = "SELECT DISTINCT categorie FROM produit";
        $resultat = $this -> getDb() -> query($requete);

        $categories = $resultat -> fetchAll(PDO::FETCH_ASSOC);

        if(!$categories){
            return FALSE;
        } else {
            return $categories;
        }
    }

    public function getAllProduitsByCategorie($categorie){
        //prepare
        $requete = "SELECT * FROM produit WHERE categorie = :categorie";
        $resultat = $this ->getDb() -> prepare($requete);

        $resultat -> bindParam(':categorie', $categorie, PDO::PARAM_STR);
        $resultat -> execute();

         $produits = $resultat -> fetchAll(PDO::FETCH_ASSOC);

         if(!$produits){
             return FALSE;
         } else{
             return $produits;
         }
    }

    public function getAllSuggestions($categorie, $id){
        //query
         $requete = "SELECT * FROM produit WHERE categorie = '$categorie' AND id_produit != $id";
        $resultat = $this ->getDb() -> query($requete);

        $suggestions = $resultat -> fetchAll(PDO::FETCH_ASSOC);

         if(!$suggestions){
             return FALSE;
         } else{
             return $suggestions;
         }
    }
}