<?php
declare(strict_types = 1);
interface IMouse
{
    public function move(int $currentX, int $currentY, int $offsetX, int $offsetY);
    public function click(bool $leftClick, bool $rightClick);
}