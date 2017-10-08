<?php
declare(strict_types = 1);
class Box{
    private $length;
    private $width;
    private $height;

    public function __construct(float $length, float $width, float $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getSurfaceArea()
    {
        $surfaceArea = (2 * $this->length * $this->width) +
               (2 * $this->length * $this->height) +
               (2 * $this->width * $this->height);
        return number_format($surfaceArea,2, '.', '');
    }

    public function getLateralSurfaceArea()
    {
        $lateralSurfaceArea = (2 * $this->length * $this->height) + (2 * $this->width * $this->height);
        return number_format($lateralSurfaceArea,2, '.', '');
    }

    public function getVolume()
    {
        $volume = $this->length * $this->width * $this->height;
        return number_format($volume,2, '.', '');
    }

    public function __toString()
    {
        return  'Surface Area - ' . $this->getSurfaceArea(). "\r\n" .
                'Lateral Surface Area - ' . $this->getLateralSurfaceArea(). "\r\n" .
                'Volume - ' . $this->getVolume(). "\r\n";
    }
}