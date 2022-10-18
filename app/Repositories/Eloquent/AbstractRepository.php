<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

abstract class AbstractRepository
{
    protected $model;

    function __construct()
    {
        $this->model = $this->resolveModel();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }

    public function all(string $column = 'id', string $order = 'ASC'):Collection
    {
        return $this->model->orderBy($column,$order)->get();
    }

    public function paginate(int $paginate = 10, string $column = 'id', string $order = 'ASC'):LengthAwarePaginator
    {
        return $this->model->orderBy($column,$order)->paginate($paginate);
    }

    public function simplePaginate(int $paginate = 10, string $column = 'id', string $order = 'ASC'):Paginator
    {
        return $this->model->orderBy($column,$order)->simplePaginate($paginate);
    }

    public function findWhereLike(array $columns, string $search, string $column = 'id', string $order = 'ASC'):Collection
    {
       $query = $this->model;

       foreach ($columns as $key => $value) {
          $query = $query->orWhere($value,'like','%'.$search.'%');
       }

       return $query->orderBy($column,$order)->get();
    }

    public function create(array $data):Bool
    {
        return (bool) $this->model->create($data);
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function update(array $data, int $id):Bool
    {
        $register = $this->find($id);
        if ($register) {
            return (bool) $register->update($data);
        } else {
            return false;
        }
    }

    public function delete(int $id):Bool
    {
        $register = $this->find($id);
        if ($register) {
            return (bool) $register->delete();
        } else {
            return false;
        }
    }
}
