<?php


class Vegetable extends Food
{
    protected $foodType = "Vegetable";

    public function getFoodType(){
        return $this->foodType;
    }

}