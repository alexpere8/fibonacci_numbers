<?php
use fibonacci\Fibonacci_numbers;

use PHPUnit\Framework\TestCase;

class Fibonacci_numbersTest extends TestCase
{
    protected function setUp(): void
    {
        $this->fibonacciNumbers = new Fibonacci_numbers();
    }

    public function testZeroGetSequence()
    {
        $this->assertEquals([0], $this->fibonacciNumbers->getSequence(0));
    }

    /**
     * @dataProvider positiveSequenceProvider
     */
    public function testPositiveGetSequence($input, $expectedSequence)
    {
        $this->assertEquals($expectedSequence, $this->fibonacciNumbers->getSequence($input));
    }

    /**
     * @dataProvider negativeSequenceProvider
     */
    public function testNegativeGetSequence($input, $expectedSequence)
    {
        $this->assertEquals($expectedSequence, $this->fibonacciNumbers->getSequence($input));
    }

    /**
     * @dataProvider positiveSummProvider
     */
    public function testPositiveGetSumm($input, $expectedSequence)
    {
        $this->assertEquals($expectedSequence, $this->fibonacciNumbers->getSumm($input));
    }

    /**
     * @dataProvider negativeSummProvider
     */
    public function testNegatuveGetSumm($input, $expectedSequence)
    {
        $this->assertEquals($expectedSequence, $this->fibonacciNumbers->getSumm($input));
    }

    public function testZeroGetSumm()
    {
        $this->assertEquals(0, $this->fibonacciNumbers->getSumm(0));
    }

    public function positiveSequenceProvider()
    {
        return [
            'sequenceOne' => [7, [0, 1, 1, 2, 3, 5, 8, 13]],
            'sequenceTwo' => [10, [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55]]
        ];
    }

    public function negativeSequenceProvider()
    {
        return [
            'sequenceOne' => [-7, [0, 1, -1, 2, -3, 5, -8, 13]],
            'sequenceTwo' => [-10, [0, 1, -1, 2, -3, 5, -8, 13, -21, 34, -55]]
        ];
    }

    public function positiveSummProvider()
    {
        return [
            [1, 1],
            [2, 1],
            [3, 2],
            [5, 5],
            [7, 13],
            [8, 21]
        ];
    }

    public function negativeSummProvider()
    {
        return [
            [-1, 1],
            [-2, -1],
            [-3, 2],
            [-5, 5],
            [-7, 13],
            [-8, -21]
        ];
    }
}