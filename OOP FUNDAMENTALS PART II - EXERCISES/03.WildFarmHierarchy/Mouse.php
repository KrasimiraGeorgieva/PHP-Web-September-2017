<?php

class Mouse extends Mammal
{
    public function makeSound()
    {
       echo 'SQUEEEAAAK!'."\r\n";
    }

    public function eatFood(Food $food, $foodType)
    {
        $this->makeSound();
        if ($food->getFoodType()!= 'Vegetable'){
            echo 'Mouse are not eating that type of food!';
        }else{
            $this->foodEaten += $food->getQuantity();
        }
    }
}