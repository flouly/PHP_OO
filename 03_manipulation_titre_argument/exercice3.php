<?php
 class Vehicule
 {
    private $litreEssence;
    private $reservoir;

    public function getLitreEssence(){
        return $this->litreEssence;
    }

    public function setLitreEssence($litre){
        $this->litreEssence = $litre;
    }

    public function getReservoir(){
        return $this->reservoir;
    }

    public function setReservoir($res){
        $this->reservoir = $res;
    }
 }

 class Pompe
 {
    private $litreEssence;

    public function getLitreEssence(){
        return $this->litreEssence;
    }

    public function setLitreEssence($litre){
        $this->litreEssence = $litre;
    }

    public function faitLePlein(Vehicule $v){
       
        //affecter la nouvelle valeur de litreEsssnce a notre objet Vehicule(50)

        $litre_a_mettre = $v->getReservoir() - $v->getLitreEssence();

        $v->setLitreEssence($v->getLitreEssence() + $litre_a_mettre);
        
        //affecter la nouvelle valeur de litreEssence a notre objet Pompe(755)
        $this->setLitreEssence($this->getLitreEssence() - $litre_a_mettre);
    }
 }

 $vehicule = new Vehicule;

 $vehicule->setLitreEssence(5);
 $vehicule->setReservoir(50);

 echo $vehicule->getLitreEssence();

$pompe = new Pompe;

$pompe->setLitreEssence(800);
echo $pompe->getLitreEssence();




$pompe->faitLePlein($vehicule);

echo 'Dans le vehicule il y a' . $vehicule->getLitreEssence();

echo 'Dans la pompe il y a' . $pompe->getLitreEssence();

