<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Product_brandPolicy
{
    use HandlesAuthorization;
    public function productCategories(User $user){
        return $this->getThePermission($user,40);
    }
    public function addProductCategories(User $user){
        return $this->getThePermission($user,41);
    }
    public function brands(User $user){
        return $this->getThePermission($user,42);
    }
    public function addBrand(User $user){
        return $this->getThePermission($user,43);
    }
    public function productCategoriesEdit(User $user){
        return $this->getThePermission($user,44);
    }
    public function productCategoriesDelete(User $user){
        return $this->getThePermission($user,45);
    }
    public function brandsEdit(User $user){
        return $this->getThePermission($user,46);
    }
    public function brandsDelete(User $user){
        return $this->getThePermission($user,47);
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
