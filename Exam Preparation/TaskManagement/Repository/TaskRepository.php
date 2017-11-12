<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/9/2017
 * Time: 22:27
 */

namespace TaskManagement\Repository;




use Database\DatabaseInterface;

class TaskRepository implements TaskRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }
}