<?php

namespace App\Repositories\Eloquent;

use App\Role;
use App\Repositories\Contracts\RoleRepositoryInterface;

class RoleRepository extends AbstractRepository implements RoleRepositoryInterface
{

    protected $model = Role::class;

    public function create(array $data):Bool
    {
        $register = $this->model->create($data);
        if(isset($data['permissions']) && count($data['permissions'])){
            foreach ($data['permissions'] as $key => $value) {
                $register->permissions()->attach($value);
            }
        }
        return (bool) $register;
    }

    public function update(array $data, int $id):Bool
    {
        $register = $this->find($id);
        if($register){

            $permissions = $register->permissions;
            if(count($permissions)){
                foreach ($permissions as $key => $value) {
                    $register->permissions()->detach($value->id);
                }
            }

            if(isset($data['permissions']) && count($data['permissions'])){
                foreach ($data['permissions'] as $key => $value) {
                    $register->permissions()->attach($value);
                }
            }
            return (bool) $register->update($data);
        } else {
            return false;
        }
    }
}
