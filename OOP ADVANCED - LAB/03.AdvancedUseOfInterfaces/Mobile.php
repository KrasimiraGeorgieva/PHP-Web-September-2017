<?php
declare(strict_types = 1);

abstract class Mobile
{
    protected $operator;
    protected $canCall;
    protected $battery;

    public function __construct(string $operator, bool $canCall, float $battery)
    {
        $this->operator = $operator;
        $this->canCall = $canCall;
        $this->battery = $battery . '%';
    }
}