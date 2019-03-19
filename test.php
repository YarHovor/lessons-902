<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

$a = [10,20,15,17,24,35];
//$result = 0;

foreach ($a as $item){
    $result += $item;
}

echo $result . "\n";