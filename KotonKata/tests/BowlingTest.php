<?php
use PHPUnit\Framework\TestCase;
use App\Bowling;


final class BowlingTest extends TestCase
{
    public function test_if_turn_ends_when_score_hits_10()
    {
        $bowling = new Bowling();

        $result = $bowling->doOneTurn();

        $this->assertEquals(10, $result);
    }

    public function test_if_returns_strike_if_one_throw_hits_10()
    {
        $bowling = new Bowling();

        $result = $bowling->doOneTurn();

        $this->assertEquals('strike', $result);
    }

    public function test_if_returns_spare_if_both_throws_equal_to_less_than_10()
    {
        $bowling = new Bowling();

        $result = $bowling->doOneturn();

        $this->assertEquals('spare', $result);
    }
}