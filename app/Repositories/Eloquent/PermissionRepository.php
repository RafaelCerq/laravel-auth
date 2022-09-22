<?php

namespace App\Repositories\Eloquent;

use App\Permission;
use App\Repositories\Contracts\PermissionRepositoryInterface;

class PermissionRepository extends AbstractRepository implements PermissionRepositoryInterface
{

    protected $model = Permission::class;

}
