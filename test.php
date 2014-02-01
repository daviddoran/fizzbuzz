#!/usr/bin/env php
<?php

/**
 * 1. Pipe a script's output to STDIN to check it matches expected.csv
 * 2. Pass a script as the first argument to check its output matches expected.csv
 */

if ($argc > 1) {
    $php = PHP_BINDIR . "/php ";
    passthru(
        "$php " . escapeshellarg($argv[1]) . " | $php {$argv[0]}",
        $exit_code
    );
    exit($exit_code);
}

function readlines($f) {
    $lines = array();
    while ($line = fgets($f)) {
        $lines []= trim($line);
    }
    return $lines;
}

$expected = readlines(fopen('expected.csv', 'r'));
$actual   = readlines(STDIN);

$pass = count(array_intersect($expected, $actual)) === 100;

if ($pass) {
    echo "pass\n";
    exit(0);
} else {
    echo "fail\n";
    var_dump($actual);
    var_dump($expected);
    exit(1);
}

