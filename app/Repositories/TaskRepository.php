<?php

namespace App\Repositories;

use App\Models\User;

class TaskRepository
{
git commit -m "first commit"
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