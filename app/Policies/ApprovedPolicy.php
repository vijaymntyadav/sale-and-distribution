<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ApprovedPolicy
{
    use HandlesAuthorization;
    public function index(User $user){
        return $this->getThePermission($user,75);
    }
    public function challan(User $user){
        return $this->getThePermission($user,76);
    }
    public function additionalChallan(User $user){
        return $this->getThePermission($user,77);
    }
    public function totalChallan(User $user){
        return $this->getThePermission($user,78);
    }
    public function invoice(User $user){
        return $this->getThePermission($user,79);
    }
    public function additionalInvoice(User $user){
        return $this->getThePermission($user,80);
    }
    public function totalInvoice(User $user){
        return $this->getThePermission($user,81);
    }
    public function delete(User $user){
        return $this->getThePermission($user,82);
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
