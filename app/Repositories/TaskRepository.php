<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;

/**
 * class TaskRepository
 */
class TaskRepository implements TaskRepositoryInterface
{

    protected Task $model;

    public function __construct(Task $task)
    {
        $this->model = $task;
    }

    /**
     * @inheritDoc
     */
    public function getAllTasks()
    {
        return $this->model->paginate(self::COUNT_PER_PAGE);
    }

    /**
     * @inheritDoc
     */
    public function getTaskById($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @inheritDoc
     */
    public function deleteTask($id)
    {
        return $this->model->destroy($id);
    }

    /**
     * @inheritDoc
     */
    public function createTask(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * @inheritDoc
     */
    public function updateTask($id, array $attributes)
    {
        return $this->model->where('id', $id)->update($attributes);
    }

    /**
     * @inheritDoc
     */
    public function getCompletedTasks()
    {
        return $this->model->where('is_completed', 1)->get();
    }
}
