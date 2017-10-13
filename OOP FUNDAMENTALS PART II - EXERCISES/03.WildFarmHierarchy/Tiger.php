<?php


class Tiger extends Felime
{
    public function makeSound()
    {
        echo 'ROAAR!!!'. PHP_EOL;
    }

    public function eatFood(Food $food, $foodType)
    {
        $this->makeSound();

        if ($food->getFoodType() != 'Meat'){
            echo 'Tiger are not eating that type of food!'. PHP_EOL;
        }else{
            $this->foodEaten += $food->getQuantity();
        }
    }
}