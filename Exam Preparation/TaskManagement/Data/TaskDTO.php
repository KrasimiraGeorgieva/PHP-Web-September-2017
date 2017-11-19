<?php

namespace TaskManagement\Data;

class TaskDTO
{
    const TITLE_MIN_LENGTH = 3;
    const TITLE_MAX_LENGTH = 50;

    const DESCRIPTION_MIN_LENGTH = 10;
    const DESCRIPTION_MAX_LENGTH = 10000;

    const LOCATION_MIN_LENGTH = 3;
    const LOCATION_MAX_LENGTH = 100;

    private $id;

    private $title;

    private $description;

    private $location;

    /**
     * @var UserDTO
     */
    private $author;

    /**
     * @var CategoryDTO
     */
    private $category;

    private $startedOn;

    private $dueDate;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        DTOValidator::validate(
            self::TITLE_MIN_LENGTH,
            self::TITLE_MAX_LENGTH,
            $title,
            "Title length out of range"
        );
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        DTOValidator::validate(
            self::DESCRIPTION_MIN_LENGTH,
            self::DESCRIPTION_MAX_LENGTH,
            $description,
            "Description length out of range"
        );
        $this->description = $description;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        DTOValidator::validate(
            self::LOCATION_MIN_LENGTH,
            self::LOCATION_MAX_LENGTH,
            $location,
            "Location length out of range"
        );
        $this->location = $location;
    }

    public function getAuthor(): UserDTO
    {
        return $this->author;
    }

    public function setAuthor(UserDTO $author)
    {
        $this->author = $author;
    }

    public function getCategory(): CategoryDTO
    {
        return $this->category;
    }

    public function setCategory(CategoryDTO $category)
    {
        $this->category = $category;
    }

    public function getStartedOn()
    {
        return $this->startedOn;
    }

    public function setStartedOn($startedOn)
    {
        $this->startedOn = $startedOn;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }
}