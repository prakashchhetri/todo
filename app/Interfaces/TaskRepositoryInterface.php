<?php

declare(strict_types=1);

namespace App\Interfaces;

interface TaskRepositoryInterface
{

    /**
     * @return mixed
     */
    public function getAllTasks();

    /**
     * @param $taskId
     * @return mixed
     */
    public function getTaskById($taskId);

    /**
     * @param $taskId
     * @return mixed
     */
    public function deleteTask($taskId);

    /**
     * @param  array  $task
     * @return mixed
     */
    public function createTask(array $task);

    /**
     * @param $taskId
     * @param  array  $task
     * @return mixed
     */
    public function updateTask($taskId, array $task);

    /**
     * @return mixed
     */
    public function getCompletedTasks();

}
