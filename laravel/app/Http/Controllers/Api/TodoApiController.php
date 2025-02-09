<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use App\Repositories\Todo\TodoRepositoryInterface;


class TodoApiController extends Controller
{
    /**
     * 
     */
    protected $repository;

    public function __construct(TodoRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        return $this->repository->paginate();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoRequest $request)
    {
        $data = $request->only(["title", "description"]);
        $data["user_id"] = auth()->id();
        return $this->repository->create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return $this->repository->find($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(TodoRequest $request, string $id)
    {
        $data = $request->only(["title", "description"]);
        $todo = $this->repository->find($id);
        return $todo->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->repository->delete($id);
    }
}
