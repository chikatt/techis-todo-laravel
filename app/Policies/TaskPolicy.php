<?php

namespace App\Policies;

use App\Models\User;    
use App\Models\Task;


class TaskPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * 指定されたユーザーのタスクの時解除可能
     * 
     * @param User $user
     * @param Task $task
     * @return bool
     */
    public function delete(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
}