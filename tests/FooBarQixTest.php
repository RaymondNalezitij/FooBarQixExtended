<?php

use App\FooBarQix;

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
    expect($number->replaceSpecialNumbers())->toEqual("Foo, Qix");
});

test("If given number is not a multiple of 3, 5 or 7 the program should return the number as string", function () {
    $number = new FooBarQix(4);
    expect($number->replaceSpecialNumbers())->toEqual("4");
});