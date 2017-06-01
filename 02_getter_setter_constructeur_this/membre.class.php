<?php

class Membre
{
    private $pseudo;
    private $mdp;

    public function setPseudo($pseudo){
        if(!empty($pseudo) && is_string($pseudo)){
            $this->pseudo = $pseudo;
        } else{
            return 'Pseudo faux';
        }
    }

    public function getPseudo(){
        return $this->pseudo;
    }

    public function setMdp($mdp){
        if(!empty($mdp) && is_string($mdp)){
            $salt = 'frederic' . time();
            $salt = md5($salt);
            //on enregistre le salt dans la BDD par membre
            $mdp_a_crypter = $salt . $mdp;
            $mdp_a_crypter = md5($mdp_a_crypter);
            $this->mdp = $mdp_a_crypter;
        } else{
            return 'le mot de passe n\'est pas valable';
        }
    }

    public function getMdp(){
        return $this->mdp;
    }


}

//---------------------
$membre = new Membre;

$membre->setPseudo('Runner');

$membre->setMdp('blue');

echo $membre->getPseudo();
echo $membre->getMdp();
