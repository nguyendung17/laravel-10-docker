<?php
namespace App\Repositories\Todo;

use App\Repositories\EloquentRepository;

class TodoRepository extends EloquentRepository implements TodoRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Todo::class;
    }

    public function getTodos($limit = 5)
    {
        return $this->model->select('name')->take($limit)->get();
    }
}
