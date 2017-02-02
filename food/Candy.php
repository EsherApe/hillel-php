<?php

namespace Food;

use myProject\Product;

class Candy extends Product
{
    public function __toString()
    {
        $fullString = "Candy: " . $this->name . " - " . $this->price;
        return $fullString;
    }
}