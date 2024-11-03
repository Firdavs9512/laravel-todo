<?php

namespace App\Repositories;

use App\Contracts\TodoRepository as TodoRepositoryContract;
use App\Models\Todo;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TodoRepository implements TodoRepositoryContract
{
    public function __construct(
        private Todo $todo
    ) {}

    /**
     * Get all todo
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->todo->where('user_id', Auth::id())->get();
    }

    /**
     * Find a todo by ID
     *
     * @param int $id
     *
     * @return Model
     */
    public function find(int $id): Model
    {
        return $this->todo->find($id);
    }

    /**
     * Create a new todo
     *
     * @param array $data
     *
     * @return Model
     */
    public function create(array $data): Model
    {
        $data['user_id'] = Auth::id();
        return $this->todo->create($data);
    }

    /**
     * Update a todo by ID
     *
     * @param int $id
     * @param array $data
     *
     * @return Model
     */
    public function update(int $id, array $data): Model
    {
        $todo = $this->todo->find($id);
        $todo->update($data);
        return $todo;
    }

    /**
     * Delete a todo by ID
     *
     * @param int $id
     *
     * @return void
     */
    public function delete(int $id): void
    {
        $this->todo->find($id)->delete();
    }

    /**
     * Toggle completed status of a record by ID
     *
     * @param int $id
     * @return void
     */
    public function toggleCompleted(int $id): void
    {
        $todo = $this->todo->find($id);
        $todo->update(['completed' => !$todo->completed]);
    }
}
