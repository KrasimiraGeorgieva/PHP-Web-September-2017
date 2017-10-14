<?php
declare(strict_types = 1);
interface ITouchScreen
{
    public function moveFinger();
    public function clickFinger();
    public function writeText(string $text);
}