<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InvoicePolicy
{
    use HandlesAuthorization;
    public function index(User $user){
        return $this->getThePermission($user,70);
    }
    public function invoice(User $user){
        return $this->getThePermission($user,71);
    }
    public function additional(User $user){
        return $this->getThePermission($user,72);
    }
    public function total(User $user){
        return $this->getThePermission($user,73);
    }
    public function delete(User $user){
        return $this->getThePermission($user,74);
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
