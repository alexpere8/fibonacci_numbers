<?php
require __DIR__ . '/../vendor/autoload.php';
use \fibonacci\Fibonacci_numbers;

$fibonacciNumbers = new Fibonacci_numbers();
$fibonacciSequence = $fibonacciNumbers->getSequence(9);
echo "Sequence 9: " . implode(', ', $fibonacciSequence) . "<br>";

$fibonacciSumm = $fibonacciNumbers->getSumm(9);
echo "Summ 9: $fibonacciSumm<br>";

$fibonacciSequence = $fibonacciNumbers->getSequence(-9);
echo "Sequence -9: " . implode(', ', $fibonacciSequence) . "<br>";

$fibonacciSumm = $fibonacciNumbers->getSumm(-9);
echo "Summ -9: $fibonacciSumm<br>";