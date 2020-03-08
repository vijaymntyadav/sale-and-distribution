<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StockPolicy
{
    use HandlesAuthorization;
    public function stockIndex(User $user){
        return $this->getThePermission($user,48);
    }
    public function stockCreate(User $user){
        return $this->getThePermission($user,49);
    }
    public function details(User $user){
        return $this->getThePermission($user,50);
    }
    public function download(User $user){
        return $this->getThePermission($user,51);
    }
    public function edit(User $user){
        return $this->getThePermission($user,52);
    }
    public function delete(User $user){
        return $this->getThePermission($user,53);
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
