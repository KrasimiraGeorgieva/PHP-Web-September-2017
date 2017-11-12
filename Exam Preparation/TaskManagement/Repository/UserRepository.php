<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/9/2017
 * Time: 22:25
 */

namespace TaskManagement\Repository;



use Database\DatabaseInterface;

class UserRepository implements UserRepositoryInterface
{

    /**
     * @var DatabaseInterface
     */
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }


    public function register()
    {
        // TODO: Implement register() method.
    }
}