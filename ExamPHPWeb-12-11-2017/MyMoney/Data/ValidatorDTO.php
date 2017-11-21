<?php

namespace MyMoney\Data;


class ValidatorDTO
{
    public static function validate($min, $max, $value, $errorMessage)
    {
        if (mb_strlen($value) < $min
            || mb_strlen($value) > $max) {
            throw new \Exception($errorMessage);
        }
    }
}