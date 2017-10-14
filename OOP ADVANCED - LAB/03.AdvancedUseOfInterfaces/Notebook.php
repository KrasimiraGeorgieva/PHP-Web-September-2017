<?php
declare(strict_types = 1);

class Notebook extends Computer implements IKeyboard, IMouse, ITouchScreen
{
    private $writtenText;

    public function __construct(string $processor, string $ram)
    {
        parent::__construct($processor, $ram);
    }

    public function pressKey()
    {
        echo 'The keyboard\'s key was pressed.';
    }

    public function changeStatus()
    {
        echo 'The status of the keyboard was changed.';
    }

    public function move(int $currentX, int $currentY, int $offsetX, int $offsetY)
    {
        return '$newX, $newY';
    }

    public function click(bool $leftClick, bool $rightClick)
    {
        if ($leftClick){
            echo 'Mouse was clicked on the left button';
        }elseif($rightClick){
            echo 'Mouse was clicked on the right button';
        }
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

    public function getWrittenText():string
    {
        return $this->writtenText;
    }
}