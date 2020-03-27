<?php
namespace App;

class Fizzbuzz {

    public function isFizz($number) {
        return $number % 3 ? false : 'Fizz';
    }

    public function isBuzz($number) {
        return $number % 5 ? false : 'Buzz';
    }

}