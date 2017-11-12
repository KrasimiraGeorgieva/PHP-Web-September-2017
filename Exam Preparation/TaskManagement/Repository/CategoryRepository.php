<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/9/2017
 * Time: 22:24
 */

namespace TaskManagement\Repository;



use Database\DatabaseInterface;

class CategoryRepository implements CategoryRepositoryInterface
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