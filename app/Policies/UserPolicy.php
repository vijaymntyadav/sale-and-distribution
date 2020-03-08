<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
    public function allUser(User $user){
        return $this->getThePermission($user,35);
    }
    public function createUser(User $user){
        return $this->getThePermission($user,36);
    }
    public function details(User $user){
        return $this->getThePermission($user,37);
    }
    public function edit(User $user){
        return $this->getThePermission($user,38);
    }
    public function delete(User $user){
        return $this->getThePermission($user,39);
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
