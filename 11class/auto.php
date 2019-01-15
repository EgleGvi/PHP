<?php

class Auto
{
    public $date;
    public $time;
    public $number;
    public $distance;
    public $travelTime;

    function __construct($date, $time, $number, $distance, $travelTime)
    {
        $this->date=$date;
        $this->time=$time;
        $this->number=$number;
        $this->distance=$distance;
        $this->travelTime=$travelTime;
    }
}





