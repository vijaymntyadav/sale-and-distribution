<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CancelPolicy
{
    use HandlesAuthorization;
    public function index(User $user){
        return $this->getThePermission($user,83);
    }
    public function invoice(User $user){
        return $this->getThePermission($user,84);
    }
    public function challan(User $user){
        return $this->getThePermission($user,85);
    }
    public function delete(User $user){
        return $this->getThePermission($user,86);
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
