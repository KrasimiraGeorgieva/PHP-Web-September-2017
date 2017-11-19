<?php

namespace TaskManagement\Repository;

use TaskManagement\Data\CategoryDTO;

interface CategoryRepositoryInterface
{
    public function findAll(): \Generator;

    public function findOne(int $id): CategoryDTO;

    public function findTasksPerGroup(): \Generator;
}