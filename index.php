<?php

$test = 2147483648;
$test = 21.47483648;
$test = 'Hello';
$test = "$test world";
$test = 'Hello test';

$test = NULL;
$test = null;

$test = TRUE;
$test = FALSE;

$test = true;
$test = false;

$test = [
    'time' => time(),
    'test' => 'asdfas',
    'key' => [
        'ti' => [
            't' => 'time()'
        ]
    ]
];

$test = [
    'test',
    'hello',
    'world',
];

$text = '';
foreach ($test as $key => $value) {
    $text .= $value . ' ';
}
echo $text;

?>
<h1 style="color: brown;"><?= implode(' ', $test) ?></h1>
<h2><?= implode(' ', $test) ?></h2>
<h3><?= implode(' ', $test) ?></h3>
<h4><?= implode(' ', $test) ?></h4>
<h5><?= implode(' ', $test) ?></h5>
<h6><?= implode(' ', $test) ?></h6>
