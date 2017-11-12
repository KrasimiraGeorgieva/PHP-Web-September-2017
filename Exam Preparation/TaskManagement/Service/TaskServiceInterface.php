<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/10/2017
 * Time: 00:03
 */

namespace TaskManagement\Service;

use TaskManagement\DTO\DashboardDTO;
use TaskManagement\TaskDTO;

interface TaskServiceInterface
{
    public function add(TaskDTO $task):bool;

    public function edit(TaskDTO $task, int $id):bool;

    public function remove(int $id ):bool;

    public function view(int $id):TaskDTO;

    public function viewAll(int $pageNum):DashboardDTO;
}