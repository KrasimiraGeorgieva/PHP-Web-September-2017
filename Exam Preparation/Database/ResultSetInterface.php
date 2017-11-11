<?php

namespace Database;


interface ResultSetInterface
{
public function fetch($className): \Generator;

public function fetchColumn(int $colNum = 0);
}