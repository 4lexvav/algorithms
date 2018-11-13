<?php

function find($a, $v) {
    $l = 0;
    $r = count($a) - 1;

    while($l <= $r) {
        $mid = floor($l + ($r - $l) / 2);

        if ($a[$mid] > $v) {
            $r = $mid - 1;
        } elseif ($a[$mid] < $v) {
            $l = $mid + 1;
        } else {
            return $mid;
        }
    }

    return -1;
}

function findL($a, $v) {
    $l = 0;
    $r = count($a);

    while($l < $r) {
        $mid = floor($l + ($r - $l) / 2);

        if ($a[$mid] >= $v) {
            $r = $mid;
        } else {
            $l = $mid + 1;
        }
    }

    return $l;
}

function findR($a, $v) {
    $l = 0;
    $r = count($a);

    while($l < $r) {
        $mid = floor($l + ($r - $l) / 2);

        if ($a[$mid] > $v) {
            $r = $mid;
        } else {
            $l = $mid + 1;
        }
    }

    return $l - 1;
}

$v = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

echo PHP_EOL;
print_r($a);
echo PHP_EOL;
echo PHP_EOL;
print_r(findL($a, $v));
echo PHP_EOL;
