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
echo '連線成功';


/**
 * 任何地方都可以執行mySQL語法但是在php要變成字串
 *
 * 要用時複製貼上就好
 * 建立新的資料表語法,
 * 建立底下的表格
 */
$sql = "CREATE TABLE users (
  	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  	name VARCHAR(30) NOT NULL,
  	phone VARCHAR(30),
  	email VARCHAR(30)
  	)";

/**
 * 確認資料表的建立
 */
if ($conn->query($sql) === TRUE) {
    echo "資料表 users 建立完成";
} else {
    echo "建立資料表錯誤: " . $conn->error;
}

//關閉資料庫連結,減少資源的浪費
$conn->close();

?>