<?php
namespace fibonacci;

class Fibonacci_numbers
{
    public function getSequence($n)
    {
        $result = [0];

        if ($n > 0) {
            $result = [0, 1];
            for ($i = 1; $i < $n; $i++) {
                $result[] = $result[$i] + $result[$i - 1];
            }
        }

        if ($n < 0) {
            $n = abs($n);
            $result = [0, 1];
            for ($i = 1; $i < $n; $i++) {
                $result[] = $result[$i - 1] - $result[$i];
            }
        }

        return $result;
    }

    public function getSumm($n)
    {
        $result = 0;
        if ($n > 0) {
            $prev = 1;
            $result = 1;
            for ($i = 2; $i < $n; $i++) {
                $tmp = $result;
                $result += $prev;
                $prev = $tmp;
            }
        }

        if ($n < 0) {
            $prev = 0;
            $result = 1;
            $n = abs($n);
            for ($i = 1; $i < $n; $i++) {
                $tmp = $result;
                $result = $prev - $result;
                $prev = $tmp;
            }
        }

        return $result;
    }
}