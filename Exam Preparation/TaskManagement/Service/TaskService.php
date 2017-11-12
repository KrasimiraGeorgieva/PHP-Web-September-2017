<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/10/2017
 * Time: 00:03
 */

namespace TaskManagement\Service;


use TaskManagement\DTO\DashboardDTO;
use TaskManagement\Repository\TaskRepositoryInterface;
use TaskManagement\TaskDTO;

class TaskService implements TaskServiceInterface
{
    /**
     * @var TaskRepositoryInterface
     */
    private $taskRepository;


    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }


    public function add(TaskDTO $task): bool
    {
        // TODO: Implement add() method.
    }

    public function edit(TaskDTO $task, int $id): bool
    {
        // TODO: Implement edit() method.
    }

    public function remove(int $id): bool
    {
        // TODO: Implement remove() method.
    }

    public function view(int $id): TaskDTO
    {
        // TODO: Implement view() method.
    }

    public function viewAll(int $pageNum): DashboardDTO
    {
        // TODO: Implement viewAll() method.
    }
}