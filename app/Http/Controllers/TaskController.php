<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Interfaces\TaskRepositoryInterface;

class TaskController extends Controller
{
    private TaskRepositoryInterface $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function index()
    {
        $tasks = $this->taskRepository->getAllTasks();
        return $tasks;
    }

    public function show($id)
    {
        return $this->taskRepository->getTaskById($id);
    }

    public function store(TaskRequest $request)
    {
        return $this->taskRepository->createTask($request->all());
    }

    public function destroy($id)
    {
        return $this->taskRepository->deleteTask($id);
    }

    public function completed()
    {
        return $this->taskRepository->getCompletedTasks();
    }

    public function complete($id)
    {
        return $this->taskRepository->updateTask($id, ['is_completed' => 1]);
    }
}
