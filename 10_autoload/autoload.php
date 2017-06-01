<?php

function inclusion_automatique($nom_de_la_classe){

    require($nom_de_la_classe .'.class.php');

    echo 'On passe dans autoload  <br>';
    echo 'on fait un require ('. $nom_de_la_classe. '.class.php <br>';
}









//-----------------------
spl_autoload_register('inclusion_automatique');

//------------------------

/*
spl_autoload_register:
    elle va s executer a chaque fois que l interpreteur voit le mot "new"
    elle va executer ume fonction dont on lui fourni le nom en argument
    elle va apporter a notrefonvction le mot qui vient apres "new" c est dire le nom de la classe a instancier
    */