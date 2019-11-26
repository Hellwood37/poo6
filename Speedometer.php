<?php

class Speedometer
{
    public static function convertKmToMiles ($speed){
        return $speed * 0.621;
    }

    
    public static function convertMilesToKm ($speed){
        return $speed * 1.61;
    }
}