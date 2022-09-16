<?php

namespace App;

class InfQixFoo
{

    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function replaceSpecialNumbers(): string
    {
        if ($this->number % 3 == 0 && $this->number % 8 == 0 && $this->number % 7 == 0) {
            $replaced = "Inf, Qix, Foo";
        } else if ($this->number % 3 == 0 && $this->number % 8 == 0) {
            $replaced = "Inf, Foo";
        } else if ($this->number % 3 == 0 && $this->number % 7 == 0) {
            $replaced = "Qix, Foo";
        } else if ($this->number % 8 == 0 && $this->number % 7 == 0) {
            $replaced = "Inf, Qix";
        } else if ($this->number % 3 == 0) {
            $replaced = "Foo";
        } else if ($this->number % 8 == 0) {
            $replaced = "Inf";
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
            } else if ($number[$i] == 8) {
                $occurrence[] = "Inf";
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

    public function CheckIfNumberSumIsMultipleOfEight(): string
    {
        $number = strval($this->number);
        if(($number[0] + $number[1] + $number[2])%8 == 0){
            return $this->ReplaceNumbersAndCheckOccurrences()."Inf";
        } else {
            return $this->ReplaceNumbersAndCheckOccurrences();
        }
    }
}