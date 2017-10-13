<?php


class Zebra extends Mammal
{
    public function makeSound()
    {
        echo 'Zs'. "\r\n";
    }
    public function eatFood(Food $food, $foodType)
    {
        $this->makeSound();
        if ($food->getFoodType() != 'Vegetable'){
            echo 'Zebra are not eating that type of food!';
        }else{
            $this->foodEaten += $food->getQuantity();
        }
    }
}