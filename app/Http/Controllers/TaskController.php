<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Interfaces\TaskRepositoryInterface;
use App\Traits\ApiResponses;

class TaskController extends Controller
{

    use ApiResponses;

    private TaskRepositoryInterface $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function index()
    {
        $tasks = $this->taskRepository->getAllTasks();
        return ApiResponses::successResponse($tasks);
    }

    public function show($id)
    {
        $task = $this->taskRepository->getTaskById($id);
        return ApiResponses::successResponse($task);
    }

    public function store(TaskRequest $request)
    {
        $task = $this->taskRepository->createTask($request->all());
        return ApiResponses::createdResponse($task);
    }

    public function destroy($id)
    {
        $response = $this->taskRepository->deleteTask($id);
        if ($response) {
            return ApiResponses::noContentResponse();
        }
        return ApiResponses::notFoundResponse('Resource not found.');
    }

    public function completed()
    {
        $tasks = $this->taskRepository->getCompletedTasks();
        return ApiResponses::successResponse($tasks);
    }

    public function complete($id)
    {
        $task = $this->taskRepository->updateTask($id, ['is_completed' => 1]);
        return ApiResponses::successResponse($task);
    }
}
