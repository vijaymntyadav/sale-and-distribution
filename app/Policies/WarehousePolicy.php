<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class WarehousePolicy
{
    use HandlesAuthorization;
    public function stockStatus(User $user){
        return $this->getThePermission($user,61);
    }
    public function edit(User $user){
        return $this->getThePermission($user,62);
    }
    public function delete(User $user){
        return $this->getThePermission($user,63);
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
