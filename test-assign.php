<?php

$lua = new \Lua();

$plain_arr = [
    'a' => 'b',
];

$referenced_arr = [
    'a' => 'b',
];
$ref = &$referenced_arr['a'];

echo "Plain array:\n";
var_dump($plain_arr);
echo "Referenced array:\n";
var_dump($referenced_arr);
echo $plain_arr === $referenced_arr ? "Arrays are identical\n" : "Arrays differ\n";
echo "\n";
echo "Assigning plain array...\n";
$lua->assign('foo', $plain_arr);
echo "Plain array assigned.\n";
echo "\n";
echo "Assigning referenced array...\n";
$lua->assign('bar', $referenced_arr);
echo "Referenced array assigned.\n";
