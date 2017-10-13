<?php


class Meat extends Food
{
    protected $foodType = "Meat";

    public function __construct($foodType)
    {
        $this->foodType = $foodType;
    }

    public function getFoodType(){
        return $this->foodType;
    }

}