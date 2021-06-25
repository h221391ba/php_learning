<?php
require_once "../db_connect.php";


//手機也用varchar
$sql = "INSERT INTO users (name, phone, email, account)
        VALUES ('John', '0900000000', 'john@example.com', 'john')";

if ($conn->query($sql) === TRUE) {
    echo "新增資料完成";
} else {
    echo "新增資料表錯誤: " . $conn->error;
}

$conn->close();

?>