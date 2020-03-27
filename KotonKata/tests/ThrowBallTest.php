<?php
use PHPUnit\Framework\TestCase;
use App\ThrowBall;

class ThrowBallTest extends TestCase
{
    public function test_if_ball_hits_from_0_upto_10()
    {
        $throwBall = new ThrowBall();
        $result = $throwBall->throwBall();

        $min = 0;
        $max = 10;

        $this->assertTrue(($min <= $result) && ($result <= $max));
    }
}