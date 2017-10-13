<?php


abstract class Food
{

    protected $quantity;
    protected $foodType;

    public function __construct($quantity, $foodType)
    {
        $this->setQuantity($quantity);
        $this->setFoodType($foodType);

    }

    protected function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity():int
    {
        return $this->quantity;
    }

    public function getFoodType()
    {
        return $this->foodType;
    }

    public function setFoodType(string $foodType)
    {
        $this->foodType = $foodType;
    }




}