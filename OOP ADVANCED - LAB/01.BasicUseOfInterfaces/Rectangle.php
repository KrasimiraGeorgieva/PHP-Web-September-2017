<?php
declare(strict_types = 1);
class Rectangle implements IArea
{
    protected $width;
    protected $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea():float
    {
        return $this->width * $this->height;
    }
    public function getSurface():float
    {
        return $this->getArea();
    }

    public function __toString()
    {
        return "Rectangle, width = {$this->width} mm, height = {$this->height} mm, area = {$this->getSurface()} mm";
    }
}