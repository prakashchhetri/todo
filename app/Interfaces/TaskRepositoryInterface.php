<?php

declare(strict_types=1);

namespace App\Interfaces;

interface TaskRepositoryInterface
{

    /**
     * Count of tasks to be returned per page
     *
     * @var int
     */
    const COUNT_PER_PAGE = 10;

    /**
     * @return mixed
     */
    public function getAllTasks();

    /**
     * @param $id
     * @return mixed
     */
    public function getTaskById($id);

    /**
     * @param $id
     * @return mixed
     */
    public function deleteTask($id);

    /**
     * @param  array  $attributes
     * @return mixed
     */
    public function createTask(array $attributes);

    /**
     * @param $id
     * @param  array  $attributes
     * @return mixed
     */
    public function updateTask($id, array $attributes);

    /**
     * @return mixed
     */
    public function getCompletedTasks();

}
