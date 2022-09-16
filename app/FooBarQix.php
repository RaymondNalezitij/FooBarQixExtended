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
        if ($this->number % 3 == 0 && $this->number % 5 == 0 && $this->number % 7 == 0) {
            $replaced = "Foo, Bar, Qix";
        } else if ($this->number % 3 == 0 && $this->number % 5 == 0) {
            $replaced = "Foo, Bar";
        } else if ($this->number % 3 == 0 && $this->number % 7 == 0) {
            $replaced = "Foo, Qix";
        } else if ($this->number % 5 == 0 && $this->number % 7 == 0) {
            $replaced = "Bar, Qix";
        } else if ($this->number % 3 == 0) {
            $replaced = "Foo";
        } else if ($this->number % 5 == 0) {
            $replaced = "Bar";
        } else if ($this->number % 7 == 0) {
            $replaced = "Qix";
        } else {
            $replaced = $this->number;
        }

        return $replaced;
    }

    public function CheckOccurrences(): string
    {
        $occurrence = [];
        $number = strval($this->number);
        for ($i = 0; $i < strlen($number); $i++) {
            if ($number[$i] == 3) {
                $occurrence[] = "Foo";
            } else if ($number[$i] == 5) {
                $occurrence[] = "Bar";
            } else if ($number[$i] == 7) {
                $occurrence[] = "Qix";
            }
        }
        return implode(", ", $occurrence);
    }

    public function ReplaceNumbersAndCheckOccurrences(): string
    {
        if ($this->CheckOccurrences() == ""){
            return $this->replaceSpecialNumbers();
        } else {
            return $this->replaceSpecialNumbers() . ", " . $this->CheckOccurrences();
        }
    }
}