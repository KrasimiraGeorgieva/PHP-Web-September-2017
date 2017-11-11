<?php

namespace Database;


interface DatabaseInterface
{
    public function query(string $query): StatementInterface;

    public function getLastError(): array ;
}