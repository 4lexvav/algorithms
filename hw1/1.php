<?php
$tests = (int) fgets(STDIN);

for (; $tests; $tests--) {
    list($n, $m, $s) = explode(' ', trim(fgets(STDIN)));
     
    //echo ($n % $m) % ($m % $n) + $s % $n  . "\n";
    //echo  (($n % $m) % ($m % $n) + ($s % $n)) % $n . "\n";
    /*if ($n >= $m) {
        echo ($n + $m + $s - 1) % $n . "\n"; // for $n > $m;
    } else {
        echo (($n + ($m % $n) + $s - 1) % $n ?: $n) . "\n";
    }*/
    
    $res = $m % $n + $s - 1;
    echo ($res && $res != $n ? $res % $n : $n) . "\n";
    
    /*for ($i = $s; ++$i <= $m;) {
        if ($)
    }*/
}

?>
