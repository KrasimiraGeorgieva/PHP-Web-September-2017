<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/10/2017
 * Time: 21:01
 */

namespace TaskManagement\DTO;


use TaskManagement\TaskDTO;

class DashboardDTO
{
    /**
     * @var \Generator|TaskDTO
     */
    private $tasks;

    /**
     * @var \Generator|TaskDTO
     */
    private $allTasksCount;
}