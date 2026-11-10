<?php

namespace App\Repositories;

use App\Models\User;

class TaskRepository
{

    /** 
     * @param User $user
     * @return Collection */
    
    public function forUser(User $user)
    {
        return $user->tasks()
            ->orderBy('created_at', 'desc')
            ->get();
    }
}