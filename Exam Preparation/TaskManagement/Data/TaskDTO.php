<?php

namespace TaskManagement;

class TaskDTO
{
    private $id;
    private $title;
    private $description;
    private $location;
    private $authorId;
    private $categoryId;
    private $startedOn;
    private $dueDate;

    public static function create (string $title,string $description,string $location,int $authorId = null,
                                   int $categoryId = null,string $startedOn,string $dueDate,int $id = null):TaskDTO
    {
        return(new TaskDTO())
            ->setTitle($title)
            ->setDescription($description)
            ->setLocation($location)
            ->setAuthorId($authorId)
            ->setCategoryId($categoryId)
            ->setStartedOn($startedOn)
            ->setDueDate($dueDate)
            ->setId($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id):TaskDTO
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title):TaskDTO
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description):TaskDTO
    {
        $this->description = $description;
        return $this;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location):TaskDTO
    {
        $this->location = $location;
        return $this;
    }

    public function getAuthorId()
    {
        return $this->authorId;
    }

    public function setAuthorId($authorId):TaskDTO
    {
        $this->authorId = $authorId;
        return $this;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId):TaskDTO
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    public function getStartedOn()
    {
        return $this->startedOn;
    }

    public function setStartedOn($startedOn):TaskDTO
    {
        $this->startedOn = $startedOn;
        return $this;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate($dueDate):TaskDTO
    {
        $this->dueDate = $dueDate;
        return $this;
    }
}