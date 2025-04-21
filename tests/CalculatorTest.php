<?php 

use App\Calculator;

it('adds two numbers', function () {
    $calc = new Calculator();
    expect($calc->add(2, 3))->toBe(5);
});

it('subtracts two numbers', function () {
    $calc = new Calculator();
    expect($calc->subtract(10, 4))->toBe(6);
});
