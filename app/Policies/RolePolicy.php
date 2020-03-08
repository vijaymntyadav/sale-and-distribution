<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;
    public function roleIndex(User $user){
        return $this->getThePermission($user,93);
    }
    public function createRole(User $user){
        return $this->getThePermission($user,94);
    }
    public function edit(User $user){
        return $this->getThePermission($user,95);
    }
    public function delete(User $user){
        return $this->getThePermission($user,96);
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
