<?php
declare(strict_types = 1);

class MobilePhone extends Mobile implements ITouchScreen
{
    protected $size;
    protected $writtenText;

    public function __construct(float $size, string $operator, bool $canCall, float $battery)
    {
        parent::__construct($operator, $canCall, $battery);
        $this->size = $size;
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