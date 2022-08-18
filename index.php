<?php
require 'Class/Character.php';
require 'Class/Hero.php';
require 'Class/Orc.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WoW</title>
</head>

<body>
    <?php
    $hero = new Hero(1000, 0, 'épées doubles', 150, 'côte de mailles', 100);
    $orc = new Orc(600, 0);
    $hero->attacked(250);
    $hero->attacked($orc->attack());
  

    // $hero->attacked(250);
    ?>

</body>

</html>