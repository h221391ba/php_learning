<?php
/**
 * @param $n
 * that you want to print
 */
function consoleLog($n)
{
    echo $n . "<br>";
}

$welcome = 'Hello World!';
//字串長度
consoleLog(strlen($welcome));       //12
//字串字數
consoleLog(str_word_count($welcome));       //2
consoleLog(str_word_count('你好嗎'));  //0, 中文無法用此方法計算

consoleLog('--------------------字串比較 & 回傳字串中的子集合----------------------------');

//substr( $string , $start , $length )
$name = 'samantha';
consoleLog(substr($name, 1));               //amantha
consoleLog(substr($name, -2));              //ha, 從字尾開始算，共取兩個字母
consoleLog(substr($name, 3, 1));     //a

consoleLog('--------------------------------------------------------------------------');

$email = 'john@test.com';
//該函數返回字串的其餘部分（從匹配點）。如果未找到所搜索的字串，則返回false。
consoleLog(strstr($email, '@'));            //@test.com
var_dump(strstr($email, 'a'));
consoleLog('');
//true，讓輸出結果完全相反，也就是@ 符號之前的字串，且不包含 @ 符號
consoleLog(strstr($email, '@', true));      //john

consoleLog(strpos($welcome, 'world'));      //區分大小寫,不符合回傳直false
consoleLog(stripos($welcome, 'world'));     //不區分大小寫, 6
if (strpos($welcome, 'world') == false) {
    consoleLog('not found');
}

$str = 'Hello John, how are you.';
$strArr = explode(' ', $str);
//此方法可以顯示出較詳細的資訊如型別
var_dump($strArr);
consoleLog('');
//只有顯示index與對應value
print_r($strArr);
consoleLog('');
consoleLog('-------------------------------------------------------------------------------');
//將陣列中的值一一列出
for ($i = 0; $i < count($strArr); $i++) {
    consoleLog($strArr[$i]);
}
consoleLog('-----------------------取代----------------------------------------');
consoleLog(str_replace("World!", "Kitty", $welcome));

?>