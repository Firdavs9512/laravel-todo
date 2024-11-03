<?php

namespace App\Http\Controllers;

use App\Contracts\TodoRepository as TodoRepositoryContract;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function __construct(
        protected TodoRepositoryContract $todoRepository
    ) {}

    public function index()
    {
        return view('pages.todo.index', [
            'todos' => $this->todoRepository->all()
        ]);
    }

    public function create()
    {
        return view('pages.todo.create');
    }

    public function store(TodoRequest $request)
    {
        $this->todoRepository->create($request->validated());

        return redirect()->route('todo.index');
    }

    public function edit(int $id)
    {
        return view('pages.todo.edit', [
            'todo' => $this->todoRepository->find($id)
        ]);
    }

    public function update(TodoRequest $request, int $id)
    {
        $this->todoRepository->update($id, $request->validated());

        return redirect()->route('todo.index');
    }

    public function destroy(int $id)
    {
        $this->todoRepository->delete($id);

        return redirect()->route('todo.index');
    }

    public function toggleCompleted(int $id)
    {
        $this->todoRepository->toggleCompleted($id);

        return redirect()->route('todo.index');
    }
}
