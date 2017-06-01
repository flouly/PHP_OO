<?php

namespace General;

require('espace1.php');
require('espace2.php');

use Espace1, Espace2;
use PDO;//LORSque on est dans namespace definie (General) et que l on souhaite utiliser une classe existante dans l espace global , alors on doit importer la classe

//d une facon general on doit importer les namespace doit on a besoin

$c = new Espace1\A;
echo $c -> test1();

$d = new Espace2\A;
echo $d -> test2();

$pdo = new PDO('mysql:host=localhost;dbname=entreprise','root','root');