<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface
{

    private const COUNT_PER_PAGE = 10;

    public function getAllTasks()
    {
        return Task::paginate(self::COUNT_PER_PAGE);
    }

    public function getTaskById($taskId)
    {
        return Task::findOrFail($taskId);
    }

    public function deleteTask($taskId)
    {
        Task::destroy($taskId);
    }

    public function createTask(array $task)
    {
        return Task::create($task);
    }

    public function updateTask($taskId, array $task)
    {
        return Task::whereId($taskId)->update($task);
    }

    public function getCompletedTasks()
    {
        return Task::completed();
    }
}
