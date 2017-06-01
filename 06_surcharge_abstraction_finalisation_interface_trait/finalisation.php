<?php


final class Application // cette classe ne pourra pas etre heritee
{
    public function run(){
        return 'application se lance';
    }
}

$app = new Application;// ok classe final peut etre instancier
$app -> run();


class Application2
{
    final public function run2(){
        return 'Application se lance';
    }
}

class Extension2 extends Application2
{
    public function run2(){}//ERREUR IMPOSSIBLE de redefinir ni de surcharger une methode final

    
}
