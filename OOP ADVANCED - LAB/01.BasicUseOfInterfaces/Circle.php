<?php
declare(strict_types = 1);
class Circle implements IArea, ICircumference
{
    protected $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getSurface():float
    {
        return pow($this->radius ,2)* M_PI;
    }

    public function getCircumference(): float
    {
        return 2 * M_PI * $this->radius;
    }
}