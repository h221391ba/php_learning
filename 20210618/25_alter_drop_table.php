<?php
//用來刪除table 欄位的語法
require_once "../db_connect.php";


/**
 * 修改users資料表,刪除欄位age
 */
$sql = "ALTER TABLE users DROP COLUMN age";

if ($conn->query($sql) === TRUE) {
    echo "資料表 users 修改完成";
} else {
    echo "修改資料表錯誤: " . $conn->error;
}

$conn->close();

?>
