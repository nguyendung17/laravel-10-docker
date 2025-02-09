<?php
namespace App\Repositories\Todo;

use App\Repositories\RepositoryInterface;

interface TodoRepositoryInterface extends RepositoryInterface
{
    public function getTodos();
}
