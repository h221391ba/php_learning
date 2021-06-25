<?php
function consoleLog ($n){
    echo $n."<br>";
}

//大小寫敏感的常數定義
define("BASKETBALL_GOD", "Michael Jordan");     //define(const, value);
consoleLog(BASKETBALL_GOD);
//consoleLog(basketball_god);   error!!

const MAX_VALUE=250;
consoleLog(MAX_VALUE);
// const MAX_VALUE=300;
// MAX_VALUE=300;


echo __LINE__."<br>";   //第幾行
echo __FILE__."<br>";   //本程式的完整路徑與檔案名稱
echo __DIR__."<br>";    //本程式所在目錄的完整路徑

function call(){
    echo __FUNCTION__."<br>";   //函式名稱

}
call();
?>