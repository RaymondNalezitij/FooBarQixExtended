<?php

use App\InfQixFoo;

//Multiples tests
test("If given number is multiple of 3 the program should return - Foo", function () {
    $number = new InfQixFoo(3);
    expect($number->replaceSpecialNumbers())->toEqual("Foo");
});

test("If given number is multiple of 8 the program should return - Inf", function () {
    $number = new InfQixFoo(8);
    expect($number->replaceSpecialNumbers())->toEqual("Inf");
});

test("If given number is multiple of 5 the program should return - Qix", function () {
    $number = new InfQixFoo(7);
    expect($number->replaceSpecialNumbers())->toEqual("Qix");
});

test("If the number is multiple of both 3 & 8 but not 7, the program should return - Inf, Foo", function () {
    $number = new InfQixFoo(24);
    expect($number->replaceSpecialNumbers())->toEqual("Inf, Foo");
});

test("If the number is multiple of both 3 & 7 but not 8, the program should return - Qix, Foo", function () {
    $number = new InfQixFoo(21);
    expect($number->replaceSpecialNumbers())->toEqual("Foo, Qix");
});

test("If the number is multiple of both 8 & 7 but not 3, the program should return - Inf, Qix", function () {
    $number = new InfQixFoo(56);
    expect($number->replaceSpecialNumbers())->toEqual("Inf, Qix");
});

test("If the number is multiple of 3, 8 and 7, the program should return - Inf, Qix, Foo", function () {
    $number = new InfQixFoo(168);
    expect($number->replaceSpecialNumbers())->toEqual("Inf, Qix, Foo");
});

test("If given number is not a multiple of 3, 8 or 7 the program should return the number as string", function () {
    $number = new InfQixFoo(4);
    expect($number->replaceSpecialNumbers())->toEqual("4");
});

//Check occurrences tests
test("If given number contains number 3 but not numbers 5 or 7, the program should return - Foo", function () {
    $number = new InfQixFoo(13);
    expect($number->CheckOccurrences())->toEqual("Foo");
});

test("If given number contains number 8 but not numbers 3 or 7, the program should return - Inf", function () {
    $number = new InfQixFoo(58);
    expect($number->CheckOccurrences())->toEqual("Inf");
});

test("If given number contains number 7 but not numbers 3 or 8, the program should return - Qix", function () {
    $number = new InfQixFoo(17);
    expect($number->CheckOccurrences())->toEqual("Qix");
});

//Combined tests

test("If given number contains number 3 and is multiple of 3 program should return - Foo, Foo", function () {
    $number = new InfQixFoo(3);
    expect($number->ReplaceNumbersAndCheckOccurances())->toEqual("Foo, Foo");
});

test("If given number contains number 8 and is multiple of 8 program should return - Inf, Inf", function () {
    $number = new InfQixFoo(8);
    expect($number->ReplaceNumbersAndCheckOccurances())->toEqual("Inf, Inf");
});

test("If given number contains number 7 and is multiple of 7 program should return - Qix, Qix", function () {
    $number = new InfQixFoo(7);
    expect($number->ReplaceNumbersAndCheckOccurances())->toEqual("Qix, Qix");
});

test("Number 537 should return Foo, Bar, Foo, Qix", function () {
    $number = new InfQixFoo(837);
    expect($number->ReplaceNumbersAndCheckOccurances())->toEqual("Foo, Inf, Foo, Qix");
});