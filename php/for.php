<?php

//NB: Never write code like this.

function fizzbuzz($N) {
    for ($i = 1;
         $i <= $N &&
         print(
             ($i % 15 === 0 ? "FizzBuzz\n" :
             ($i % 3 === 0 ? "Fizz\n" :
             ($i % 5 === 0 ? "Buzz\n" : "$i\n")))
         );
         $i++
    );
}

fizzbuzz(100);
