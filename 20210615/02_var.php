<?php
function consoleLog ($n){
    echo $n."<br>";
}
$var1;              //undefined
//寫出值與型別
var_dump($var1);    //log NULL

$var2 = 3;
var_dump($var2);    //int(3)

$myName = 'reverie';
echo '<br>';
consoleLog($myName);

$a = 99;
function show (){
    $b = 10;

    //靜態變數,靜態變數會一直存在，直到程式結束。
    // 一個定值, 重複宣告時已最後一次為初始值
    //類似閉包
    static $c = 1;

    consoleLog($a);     //無法直接取用全域變數
    //需要用這種方式取用
    consoleLog("a: ".$GLOBALS['a']);

    consoleLog('b: '.$b);
    consoleLog('c:'.$c);
    consoleLog('--------------------------');
    $GLOBALS['a'] = $GLOBALS['a'] + 1;
    $b = $b + 1;
    $c = $c + 1;
}
consoleLog($a);
show();
show();
show();
show();
consoleLog($a);
consoleLog($b.$c);

$i = true;
var_dump($i);
consoleLog('');


consoleLog('---------------int----------------');
//2進制
$i = 0b1011;
consoleLog('0b1011='.$i);       //11
//8進制
$j = 072;
consoleLog('072='.$j);          //58
//16進制
$k = 0xff;
consoleLog('0xff='.$k);         //255

consoleLog('---------------float---------------');

$i = 1.298;
consoleLog('1.298='.$i);        //1.298
$j = 1.298E7;
consoleLog("1.298E7=".$j);      //12980000
$k = 1.298e-3;
consoleLog("1.298e-3=".$k);     //0.001298

consoleLog('-------------------------------');
$x = null;
var_dump($x);
consoleLog('hi');

?>