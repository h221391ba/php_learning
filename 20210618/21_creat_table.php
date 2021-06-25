<?php
//連結資料庫
//只需要連一次所以用require_once
require_once "../db_connect.php";

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
