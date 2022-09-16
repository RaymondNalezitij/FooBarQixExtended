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
        if ($this->number % 3 == 0 && $this->number % 5 == 0 && $this->number % 7 == 0){
            return "Foo, Bar, Qix";
        } else if ($this->number % 3 == 0 && $this->number % 5 == 0) {
            return "Foo, Bar";
        } else if ($this->number % 3 == 0 && $this->number % 7 == 0) {
            return "Foo, Qix";
        } else if ($this->number % 5 == 0 && $this->number % 7 == 0) {
            return "Bar, Qix";
        } else if ($this->number % 3 == 0) {
            return "Foo";
        } else if ($this->number % 5 == 0) {
            return "Bar";
        } else if ($this->number % 7 == 0) {
            return "Qix";
        } else {
            return $this->number;
        }
    }
}