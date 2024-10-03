<?php
include 'Animal.php';
include 'Bird.php';
include 'SavageAnimal.php';
include 'Wolf.php';

$oiseau1 = new Bird('jean', 5, 3, ['fruit', 'grain'], false);

$wolf1 = new Wolf('jean', 5, 3, ['fruit', 'grain'], true);

echo $wolf1->eatBird($oiseau1);
