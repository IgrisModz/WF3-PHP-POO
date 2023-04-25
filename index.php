<?php
require_once "utils.php";
require_once "classes/Character.php";

// Création des personnages (instance des objets)
$batman = new Character("Batman", Character::MEDIUM);
$superman = new Character("Superman");

$title = "{$batman->getName()} Vs. {$superman->getName()}";

$batman->greet($superman);
$superman->greet($batman);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>

    <h1><?= $title ?></h1>

    <fieldset>
        <legend><?= strtoupper($batman->getName()) ?>:</legend>
        name: <?= $batman->getName() ?><br>
        health point: <?= $batman->getHealthPoint() ?><br>
        experience: <?= $batman->getExperience() ?><br>
    </fieldset>

    <fieldset>
        <legend><?= strtoupper($superman->getName()) ?>:</legend>
        name: <?= $superman->getName() ?><br>
        health point: <?= $superman->getHealthPoint() ?><br>
        experience: <?= $superman->getExperience() ?><br>
    </fieldset>

    <h2>Salutation</h2>
    <div>
        <?= $batman->greet($superman) ?>
        <?= score($batman, $superman) ?>
    </div>
    <div>
        <?= $superman->greet($batman) ?>
        <?= score($batman, $superman) ?>
    </div>

    <hr>

    <h2>D&eacute;but du combat</h2>

    <div>
        Batman attaque Superman
        <?php $batman->attack($superman) ?>
        <?= score($batman, $superman) ?>
    </div>

    <div>
        Superman riposte d'une attaque suivi d'une super attaque
        <?php
            $superman
                ->attack($batman)
                ->superAttack($batman);
        ?>
        <?= score($batman, $superman) ?>
    </div>

    <div>
        Batman – Furax – fait une super attaque
        <?php $batman->superAttack($superman) ?>
        <?= score($batman, $superman) ?>
    </div>

    <div>
        Superman se soigne (il pleure)
        <?php $superman->heal() ?>
        <?= score($batman, $superman) ?>
    </div>

    <div>
        Batman tente une attaque secr&agrave;te
        <?php $batman->secretAttack($superman) ?>
        <?= score($batman, $superman) ?>
        (&eacute;chec)
    </div>

    <div>
        Superman encore affaiblie lance une double attaque
        <?php
            $superman
                ->attack($batman)
                ->attack($batman);
        ?>
        <?= score($batman, $superman) ?>
    </div>

    <div>
        Batman r&eacute;pond d'une attaque simple suivi d'une attaque secr&egrave;te (et paf un coup de kryptonite)
        <?php
            $batman
                ->attack($superman)
                ->secretAttack($superman);
        ?>
        <?= score($batman, $superman) ?>
    </div>

    <div>
        Superman est au tapie et Batman gagne un point d'exp&eacute;rience.
        <?php $batman->levelUp() ?>
    </div>

    <div>
        <?= notifyExperience($batman) ?>
    </div>


</body>

</html>