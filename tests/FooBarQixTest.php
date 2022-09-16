<?php

use App\FooBarQix;

//Multiples tests
test("If given number is multiple of 3 the program should return - Foo", function () {
    $number = new FooBarQix(3);
    expect($number->replaceSpecialNumbers())->toEqual("Foo");
});

test("If given number is multiple of 5 the program should return - Bar", function () {
    $number = new FooBarQix(5);
    expect($number->replaceSpecialNumbers())->toEqual("Bar");
});

test("If given number is multiple of 5 the program should return - Qix", function () {
    $number = new FooBarQix(7);
    expect($number->replaceSpecialNumbers())->toEqual("Qix");
});

test("If the number is multiple of both 3 & 5 but not 7, the program should return - Foo, Bar", function () {
    $number = new FooBarQix(15);
    expect($number->replaceSpecialNumbers())->toEqual("Foo, Bar");
});

test("If the number is multiple of both 3 & 7 but not 5, the program should return - Foo, Qix", function () {
    $number = new FooBarQix(21);
    expect($number->replaceSpecialNumbers())->toEqual("Foo, Qix");
});

test("If the number is multiple of both 5 & 7 but not 3, the program should return - Bar, Qix", function () {
    $number = new FooBarQix(35);
    expect($number->replaceSpecialNumbers())->toEqual("Bar, Qix");
});

test("If the number is multiple of 3, 5 and 7, the program should return - Foo, Bar, Qix", function () {
    $number = new FooBarQix(105);
    expect($number->replaceSpecialNumbers())->toEqual("Foo, Bar, Qix");
});

test("If given number is not a multiple of 3, 5 or 7 the program should return the number as string", function () {
    $number = new FooBarQix(4);
    expect($number->replaceSpecialNumbers())->toEqual("4");
});

//Check occurrences tests
test("If given number contains number 3 but not numbers 5 or 7, the program should return - Foo", function () {
    $number = new FooBarQix(13);
    expect($number->CheckOccurrences())->toEqual("Foo");
});

test("If given number contains number 5 but not numbers 3 or 7, the program should return - Foo", function () {
    $number = new FooBarQix(15);
    expect($number->CheckOccurrences())->toEqual("Bar");
});

test("If given number contains number 7 but not numbers 3 or 5, the program should return - Foo", function () {
    $number = new FooBarQix(17);
    expect($number->CheckOccurrences())->toEqual("Qix");
});

//Combined tests

test("If given number contains number 3 and is multiple of 3 program should return - Foo, Foo", function () {
    $number = new FooBarQix(3);
    expect($number->ReplaceNumbersAndCheckOccurances())->toEqual("Foo, Foo");
});

test("If given number contains number 5 and is multiple of 5 program should return - Bar, Bar", function () {
    $number = new FooBarQix(5);
    expect($number->ReplaceNumbersAndCheckOccurances())->toEqual("Bar, Bar");
});

test("If given number contains number 7 and is multiple of 7 program should return - Qix, Qix", function () {
    $number = new FooBarQix(7);
    expect($number->ReplaceNumbersAndCheckOccurances())->toEqual("Qix, Qix");
});

test("Number 537 should return Foo, Bar, Foo, Qix", function () {
    $number = new FooBarQix(537);
    expect($number->ReplaceNumbersAndCheckOccurances())->toEqual("Foo, Bar, Foo, Qix");
});