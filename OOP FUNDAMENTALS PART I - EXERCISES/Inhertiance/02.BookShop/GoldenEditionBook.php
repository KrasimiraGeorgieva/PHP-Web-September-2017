<?php
declare(strict_types=1);

class GoldenEditionBook extends Book
{
    public function getPrice():float {
        return parent::getPrice()*1.3;
    }
}