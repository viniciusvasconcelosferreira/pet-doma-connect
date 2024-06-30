<?php

namespace App\Services;

use App\Models\Goal;

class GoalService
{
    public function getGoals()
    {
        return Goal::first();
    }
}