<?php
declare(strict_types = 1);

class Tablet extends Mobile implements ITouchScreen
{
    protected $stdResolution;
    protected $writtenText;

    public function __construct(string $stdResolution, string $operator, bool $canCall, float $battery)
    {
        parent::__construct($operator, $canCall, $battery);
        $this->stdResolution = $stdResolution;
    }

    public function moveFinger()
    {
        echo 'Moved finger across TouchScreen';
    }

    public function clickFinger()
    {
        echo 'Clicked on TouchScreen with finger';
    }

    public function writeText(string $text)
    {
        echo $this->writtenText = $text;
    }
}