<?php

namespace App\Reposotories;

use Illuminate\Database\Eloquent\Model;

class BaseReposotories
{
    protected $model;


    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    protected function create(array $attribute)
    {
        return $this->model->create($attribute);
    }

    protected function update(int $id, array $attribute)
    {
        return $this->model->find($id)->update($attribute);
    }

    protected function updateOrCreate(array $search_data, array $attribute)
    {
        return $this->model->updateOrCreate($search_data, $attribute);
    }

    protected function updateOrInsert(array $search_data, array $attribute)
    {
        return $this->model->updateOrInsert($search_data, $attribute);
    }

    protected function all($column = array('*'), $orderBy = 'id', $sortBy = 'desc')
    {
        return $this->model->orderBy($orderBy, $sortBy)->get($column);
    }

    protected function find(int $id)
    {
        return $this->model->find($id);
    }

    protected function findOrFail(int $id)
    {
        return $this->model->findOrFail($id);
    }

    protected function findBy(array $data)
    {
        return $this->model->where($data)->get();
    }

    protected function findOneBy(array $data)
    {
        return $this->model->where($data)->first();
    }

    protected function findOneByFail(array $data)
    {
        return $this->model->where($data)->firstOrFail();
    }

    protected function delete(int $id)
    {
        return $this->model->find($id)->delete();
    }

    protected function destroy(array $data)
    {
        return $this->model->find($data)->destroy();
    }
}
