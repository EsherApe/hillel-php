<?php

namespace Food;

use myProject\Product;

class Cookie extends Product
{
    public function __toString()
    {
        $fullString = "Cookie: " . $this->name . " - " . $this->price;
        return $fullString;
    }
}