<?php

class Radar
{
    public static function measureSpeed($auto){
       $speed = ($auto->distance / $auto->travelTime) * 3.6;
       return $speed;
    }
}


