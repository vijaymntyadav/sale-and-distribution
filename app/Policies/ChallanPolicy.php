<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChallanPolicy
{
    use HandlesAuthorization;
    public function index(User $user){
        return $this->getThePermission($user,65);
    }
    public function challan(User $user){
        return $this->getThePermission($user,66);
    }
    public function additional(User $user){
        return $this->getThePermission($user,67);
    }
    public function total(User $user){
        return $this->getThePermission($user,68);
    }
    public function delete(User $user){
        return $this->getThePermission($user,69);
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
