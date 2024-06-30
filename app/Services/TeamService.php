<?php

namespace App\Services;

use App\Models\Team;

class TeamService
{
    public function getTeam($limit = 4)
    {
        return Team::take($limit)->get();
    }
}