<?php
declare(strict_types = 1);

class DesktopComputer extends Computer implements IKeyboard,IMouse
{
    protected $keyboardConnected;

    public function __construct(string $keyboardConnected,string $processor, string $ram)
    {
        parent::__construct($processor, $ram);
        $this->keyboardConnected = $keyboardConnected;
    }

    public function pressKey()
    {
        echo 'The keyboard\'s key was pressed.';
    }

    public function changeStatus()
    {
        echo 'The status of the keyboard was changed.';
    }

    public function move(int $currentX, int $currentY, int $offsetX, int $offsetY )
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
}