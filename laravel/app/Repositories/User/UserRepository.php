<?php
namespace App\Repositories\User;

use App\Repositories\EloquentRepository;

class UserRepository extends EloquentRepository implements UserRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\User::class;
    }

    public function getUsers()
    {
        return $this->model->select('name')->take(5)->get();
    }
}
