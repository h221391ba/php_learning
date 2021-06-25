<?php
//drop table非常危險，不要在後端語言寫，有可能會不小心刪除資料
//萬一有漏洞被別人使用會很麻煩 ，有寫就有風險
//用圖形化介面操作即可


require_once "../db_connect.php";

$sql = "DROP TABLE users";

if ($conn->query($sql) === TRUE) {
    echo "資料表 users 刪除完成";
} else {
    echo "刪除資料表錯誤: " . $conn->error;
}

//關閉資料庫連結,減少資源的浪費
$conn->close();

?>