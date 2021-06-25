<?php
function consoleLog($n) {
    echo $n . "<br>";
}
$a = 77;
$b = 28;
consoleLog(var_dump($a == $b));
consoleLog(var_dump($a > $b));
consoleLog(var_dump($a < $b));

//不等於
consoleLog(var_dump($a <> $b));
consoleLog(var_dump($a != $b));

consoleLog(var_dump($a >= $b));
consoleLog(var_dump($a <= $b));

consoleLog('-------type------------');
$c = 77;
$d = '77';

consoleLog(var_dump($c == $d));
consoleLog(var_dump($c === $d));

//沒有比較型別
consoleLog(var_dump($c != $d));
consoleLog(var_dump($c <> $d));

//比較型別
consoleLog(var_dump($c !== $d));

consoleLog('------條件運算子---------');

$e = 10;
$f = ($e > 0) ? 'Positive' : 'Nagetive';
consoleLog($f);

consoleLog('-------組合比較子--------');
//組合比較子（或稱為太空船比較子）
//若 $a < $b：回傳 -1
//若 $a = $b：回傳 0
//若 $a > $b：回傳 1
$x = 5;
$y =10;
consoleLog($x <=> $y);

consoleLog('-------邏輯運算子---------');

$x = 10;
$y = 5;
consoleLog('---------------and--------------');
//其中一false則為false , 全是true則為true
consoleLog(var_dump($x == 10 and $y == 5));
consoleLog(var_dump($x == 0 and $y == 5));
consoleLog(var_dump($x == 0 && $y == 5));

consoleLog('--------------or----------------');
//其中一true則為 true, 全是false則為false
consoleLog(var_dump($x == 10 or $y == 5));
consoleLog(var_dump($x == 0 or $y == 5));
consoleLog(var_dump($x == 0 or $y == 0));
consoleLog(var_dump($x == 10 || $y == 5));

consoleLog('-------------xor----------------');
//皆true,皆false => false, 一true一false => true
consoleLog(var_dump($x == 10 xor $y == 5));
consoleLog(var_dump($x == 10 xor $y == 0));
consoleLog(var_dump($x == 0 xor $y == 0));

//優先度:  &&,|| > = > and, or
$a = false || true;
consoleLog(var_dump($a));       //true
$b = false or true;
consoleLog(var_dump($b));       //false

consoleLog('-------------參考運算子----------------');
//參考運算子「&」：用來取得變數的記憶體位置，而不是變數的值
consoleLog('-------------傳址---------------------');//
$a = 5;
$b = & $a;
consoleLog($a);     //5
consoleLog($b);     //5

$a = 0;
consoleLog($a);     //0
consoleLog($b);     //0

consoleLog('-----------傳值--------------------');//
$c=5;
$d=$c;

consoleLog($c);     //5
consoleLog($d);     //5

$d = 10;
consoleLog($c);     //5
consoleLog($d);     //10


?>
