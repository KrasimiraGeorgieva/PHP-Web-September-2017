<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/9/2017
 * Time: 23:15
 */

namespace TaskManagement;


class CategoryDTO
{
    private $id;
    private $name;

    public static function create(string $name, int $id = null):CategoryDTO
    {
        return (new CategoryDTO())
            ->setName($name)
            ->setId($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id):CategoryDTO
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name):CategoryDTO
    {
        $this->name = $name;
        return $this;
    }
}