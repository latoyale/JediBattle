<?php

/**
 * Created by PhpStorm.
 * User: latoyale
 * Date: 11/11/2016
 * Time: 5:12 PM
 */
class RebelShip extends Ship
{
    public function getFavoriteJedi(){
        $coolJedis = array('Yoda', 'Ben Kenobi');
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }

    public function getType()
    {
        return 'Rebel';
    }
}