<?php

require_once __DIR__ . '/lib/Ship.php';

/**
 * @param Ship $someShip
 */

function printShipSummary($someShip){
    echo 'Ship name: ' .$someShip->getname();
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getName();
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);
}

$myShip = new Ship();
$myShip->getname() = 'Jedi Starship';
$myShip->weaponPower = 10;



$otherShip = new Ship();
$otherShip->getname()= 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

echo '</hr>';
printShipSummary($myShip);
echo '</hr>';
printShipSummary($otherShip);
echo '</hr>';
if($myShip->doesGivenShipHaveMoreStrength($otherShip)) {
    echo $myShip->name .' has more strength';
} else {
    echo $otherShip->name .' has more strength';
}