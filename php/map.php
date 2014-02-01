<?php

function fizzbuzz($N) {
    return array_map(function ($i) {
        if ($i % 15 === 0) return 'FizzBuzz';
        if ($i % 3 === 0)  return 'Fizz';
        if ($i % 5 === 0)  return 'Buzz';
        return $i;
    }, range(1, $N));
}

echo implode(PHP_EOL, fizzbuzz(100));
