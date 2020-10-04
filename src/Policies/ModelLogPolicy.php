<?php


namespace Imannasli\ModelLog\Policies;


use App\Models\User;
use Imannasli\ModelLog\Models\ModelLog;

class ModelLogPolicy
{
    public function browse(User $user)
    {
        return $user->hasPermission('browse_model_log');
    }

    public function clear(User $user){
        return $user->hasPermission('clear_model_log');
    }
}
