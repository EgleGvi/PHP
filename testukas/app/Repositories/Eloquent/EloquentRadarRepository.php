<?php

namespace App\Repositories\Eloquent;

use App\Radar;
use App\Repositories\Contracts\RadarRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentRadarRepository extends AbstractRepository implements RadarRepository
{
    public function entity()
    {
        return Radar::class;
    }
}
