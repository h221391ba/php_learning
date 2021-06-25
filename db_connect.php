<?php
$servername = "localhost";
$username = "admin";
$password = "12345";
$dbname = "my_test_db";


/**
 * 建立資料庫連結
 */
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// 檢查連線
if ($conn->connect_error) {
    //die() 函数输出一条消息，并退出当前脚本。
    //该函数是 exit() 函数的别名。
    die("連線失敗: " . $conn->connect_error);
}
//echo '連線成功';

//時區
//可以從php設定 timezone
date_default_timezone_set("Asia/Taipei");


?>
