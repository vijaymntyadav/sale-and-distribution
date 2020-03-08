<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommissionPolicy
{
    use HandlesAuthorization;
    public function commissionIndex(User $user){
        return $this->getThePermission($user,54);
    }
    public function commissionCreate(User $user){
        return $this->getThePermission($user,55);
    }
    public function edit(User $user){
        return $this->getThePermission($user,56);
    }
    public function delete(User $user){
        return $this->getThePermission($user,57);
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
