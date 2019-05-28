<?php

function PlusPetitNombreTrouver($array)
{
    $array = [1,2,3,4,5,6,7,8,9,10];

    $compteur = 0;
    $nombre = 0;
    $nombrepluspetit = 0;

    for($compteur = 0; $compteur < count($array); $compteur++) 
    {
        if($compteur = 1) {
            $nombrepluspetit = $nombre;
        }

        if($nombre < $nombrepluspetit) {
            $nombrepluspetit = $nombre
        }
    }
    
    print "Le nombre le plus petit est". $nombrepluspetit
}