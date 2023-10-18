<?php

$a = 4;
$b = 13;
$c = 6;

function sum($a) {
    $result = 0;
    foreach ($a as $key => $value) {
        $result = $result+$value;
    }
    $result = $result/count($a);
    return $result;
}

$test = sum([
    12, 34, 23, 73, 32
]);

$test = sum([
    $a, $b, $c
]);

function foo($a) {
    $result = 1;
    foreach ($a as $key => $value) {
        echo "k: " . $key . " v: " . $value . "\n";
        $result = $result*$value;
    }
    return $result;
}

print_r(foo([2, 3, "test" => 56, 23, 65]));
?>
