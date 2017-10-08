<?php
declare(strict_types = 1);
class BoxDataValidation{
    private $length;
    private $width;
    private $height;

    public function __construct(float $length, float $width, float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    private function setLength(float $length)
    {
        if ($length > 0) {
            $this->length = $length;
        }else {
            exit('Length cannot be zero or negative.');
        }
    }

    private function setWidth(float $width)
    {
        if ($width > 0) {
            $this->width = $width;
        }else {
            exit('Width cannot be zero or negative.');
        }
    }

    private function setHeight(float $height)
    {
        if ($height > 0) {
            $this->height = $height;
        }else {
            exit('Height cannot be zero or negative.');
        }
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