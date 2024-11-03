<?php

namespace App\Repositories;

use App\Contracts\BaseRepository;
use App\Models\Todo;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class TodoRepository implements BaseRepository
{
    /**
     * Get all todo
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return Todo::all();
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
        return Todo::find($id);
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
        return Todo::create($data);
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
        return Todo::find($id)->update($data);
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
        Todo::find($id)->delete();
    }
}
