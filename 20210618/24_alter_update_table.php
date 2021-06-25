<?php
//用來修改 table 欄位的語法
require_once "../db_connect.php";


/**
 * 修改users資料表,改變欄位userName的名字為name 還有VARCHAR(30)
 */
$sql = "ALTER TABLE users CHANGE COLUMN userName name  VARCHAR(30)";

if ($conn->query($sql) === TRUE) {
    echo "資料表 users 修改完成";
} else {
    echo "修改資料表錯誤: " . $conn->error;
}

//關閉資料庫連結,減少資源的浪費
$conn->close();

?>
