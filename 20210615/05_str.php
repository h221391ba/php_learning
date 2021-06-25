<?php
function consoleLog ($n){
    echo $n."<br>";
}

$foo = 'This is a string.';
$foo2 = 'Example of string';
consoleLog($foo);
consoleLog('foo is $foo');      //單引號純字串
consoleLog("foo is $foo");      //雙引號變數會生效
consoleLog('foo is '.$foo);     //單引號需要將字串變數以.相連才可以達到相同結果
consoleLog('John said: "Hello!"');      //單雙引號可以互相夾

//字串內室數字可以運算
$foo = 1 + '2';
consoleLog($foo);       //3
var_dump($foo);
consoleLog('');      //int(3)
$foo = 1 + '11.5';
consoleLog($foo);       //12.5
var_dump($foo);         //float(12.5)
consoleLog('');


consoleLog('the path is c:\newpath');
consoleLog('the path is c:\\newpath');
consoleLog("the path is c:\newpath");
consoleLog("the path is c:\\newpath");
consoleLog('I said \'go home\'');

?>
