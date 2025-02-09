<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Repositories\Todo\TodoRepositoryInterface;


class TodoController extends Controller
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

        $todos = $this->repository->paginate();
        return $this->view('todo.index', ["todos" => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoRequest $request)
    {
        $data = $request->only(["title", "description"]);
        $data["user_id"] = auth()->id();
        $this->repository->create($data);
        return redirect(route('todo.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->view('todo.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = $this->repository->find($id);
        return $this->view('todo.edit',["todo"=>$todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TodoRequest $request, string $id)
    {
        $data = $request->only(["title", "description"]);
        $todo = $this->repository->find($id);
        $todo->update($data);
        return redirect(route('todo.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
