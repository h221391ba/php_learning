<?php
/**
 * @param $n
 * that you want to print
 */
function consoleLog($n) {
    echo $n . "<br>";
}

$a = 3;
$b = 2;
consoleLog(-$a);
consoleLog($a + $b);
consoleLog($a - $b);
consoleLog($a * $b);
consoleLog($a / $b);
consoleLog($a % $b);
consoleLog(5 % 3);
consoleLog($a ** $b);

consoleLog('---------------------------------');

$i = 5;
$i += 3;
consoleLog($i);
$i *= 3;
consoleLog($i);

$str = 'Hello,';
consoleLog($str .= 'world');

$x = 5;
$y = 6;
consoleLog("x is:" . $x--);
consoleLog("x is $x");

consoleLog("y is:" . ++$y);
consoleLog("y is $y");
?>
