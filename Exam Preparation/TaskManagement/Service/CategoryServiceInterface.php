<?php

namespace TaskManagement\Service;


use TaskManagement\Data\CategoryDTO;

interface CategoryServiceInterface
{
    /**
     * @return \Generator|CategoryDTO[]
     */
    public function getAll(): \Generator;

    public function view(int $id): CategoryDTO;

    /**
     * @return \Generator|CategoryDTO[]
     */
    public function report(): \Generator;
}