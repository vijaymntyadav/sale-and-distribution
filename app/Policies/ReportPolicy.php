<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReportPolicy
{
    use HandlesAuthorization;
    public function saleReport(User $user){
        return $this->getThePermission($user,87);
    }
    public function hierarchyWiseReport(User $user){
        return $this->getThePermission($user,88);
    }
    public function locationWiseReport(User $user){
        return $this->getThePermission($user,89);
    }
    public function productWiseSale(User $user){
        return $this->getThePermission($user,90);
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
