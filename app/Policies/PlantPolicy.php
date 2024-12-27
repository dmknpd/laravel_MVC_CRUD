<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Plant;

class PlantPolicy
{
    /**
     * Create a new policy instance.
     */
    public function edit(User $user, Plant $plant): bool
    {
        return $plant->seller->user->is($user);
    }
}
