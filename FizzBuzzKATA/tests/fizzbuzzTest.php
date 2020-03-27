<?php
use PHPUnit\Framework\TestCase;
use App\Fizzbuzz;

final class FizzBuzzTest extends TestCase
{
    public function testIsFizzReturnsFizzForNumbersDivisibleBy3 (){
        $fizz = new FizzBuzz();

        $this->assertEquals('Fizz', $fizz->isFizz(3));
    }

    public function testIsFizzReturnsFalseForNumbersNotDivisibleBy3 (){
        $fizz = new FizzBuzz();

        $this->assertEquals(false, $fizz->isFizz(1));
    }

    public function testIsBuzzReturnsBuzzForNumberDivisibleBy5 (){
        $buzz = new Fizzbuzz();

        $this->assertEquals('Buzz', $buzz->isBuzz(5));
    }

    public function testIsBuzzReturnsBuzzForNumberNotDivisibleBy5 (){
        $buzz = new Fizzbuzz();

        $this->assertEquals(False, $buzz->isBuzz(2));
    }

}