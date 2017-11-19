<?php

namespace TaskManagement\Data;


class CategoryDTO
{
    const NAME_MIN_LENGTH = 3;
    const NAME_MAX_LENGTH = 50;

    private $id;
    private $name;
    private $taskCount;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        DTOValidator::validate(
            self::NAME_MIN_LENGTH,
            PHP_INT_MAX,
            $name,
            "Name length of range"
        );

        $this->name = $name;
    }

    public function getTaskCount()
    {
        return $this->taskCount;
    }

    public function setTaskCount($taskCount)
    {
        $this->taskCount = $taskCount;
    }
}