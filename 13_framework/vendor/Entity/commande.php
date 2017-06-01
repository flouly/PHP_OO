<?php
namespace Entity;

class Commande
{

    private $id_commande;
    private $id_membre;
    private $montant;
    private $date_enregistrement;
    private $etat;


    public function getId_commande(){
        $this -> id_commande;
    }

    public function getId_membre(){
        $this -> id_membre;
    }

    public function getMontant(){
        $this -> montant;
    }

    public function getDate_enregistrement(){
        $this -> date_enregistrement;
    }

    public function getEtat(){
        $this -> etat;
    }


    public function setId_commande($id){
        $this -> id_commande = $id;
    }

    public function setId_membre($id){
        $this -> id_membre = $id;
    }

    public function setMontant($montant){
        $this -> montant = $montant;
    }

    public function setDate_enregistrement($date){
        $this -> date_enrregistrement = $date;
    }

    public function setEtat($etat){
        $this -> etat = $etat;
    }


}