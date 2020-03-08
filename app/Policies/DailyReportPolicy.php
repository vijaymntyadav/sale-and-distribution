<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DailyReportPolicy
{
    use HandlesAuthorization;
    public function index(User $user){
        return $this->getThePermission($user,91);
    }
    public function delete(User $user){
        return $this->getThePermission($user,92);
    }
    public function getThePermission($user,$p_id){
        foreach($user->roles as $role){
            foreach($role->permissions as $permission){
                if($permission->id == $p_id){
                    return true;
                }
            }
        }
        return false;
    }
}
