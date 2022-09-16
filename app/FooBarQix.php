<?php

namespace App;

class FooBarQix
{

    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function replaceSpecialNumbers(): string
    {
        if ($this->number % 3 == 0 && $this->number % 5 == 0) {
            return "Foo, Bar";
        } else if ($this->number % 3 == 0) {
            return "Foo";
        } else if ($this->number % 5 == 0) {
            return "Bar";
        } else {
            return $this->number;
        }
    }
}