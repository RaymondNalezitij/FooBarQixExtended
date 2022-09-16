<?php

test("If given number is multiple of 3 the program should return Foo", function () {
    $number = new FooBarQix(3);
    expect($number->replaceSpecialNumbers())->toEqual("Foo");
});

test("If given number is multiple of 5 the program should return Bar", function () {
    $number = new FooBarQix(5);
    expect($number->replaceSpecialNumbers())->toEqual("Bar");
});

test("If the number has several multiples, they appear in natural order (Foo, Bar).", function () {
    $number = new FooBarQix(15);
    expect($number->replaceSpecialNumbers())->toEqual("Foo, Bar");
});

test("If given number is not a multiple of 3 or 5 the program shoud return the number as string", function () {
    $number = new FooBarQix(4);
    expect($number->replaceSpecialNumbers())->toEqual("4");
});