<?php

function fizzbuzz($N) {
    foreach (range(1, $N) as $i) switch ([$i%3 === 0, $i%5 === 0]) {
        case [1,1]: echo "FizzBuzz\n"; break;
        case [1,0]: echo "Fizz\n"; break;
        case [0,1]: echo "Buzz\n"; break;
        default:    echo "$i\n"; break;
    }
}

fizzbuzz(100);
