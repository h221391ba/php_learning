<?php

//帶資料到資料庫裡
require_once "../db_connect.php";

if (isset($_POST['fruit'])){
    $fruit = $_POST['fruit'];
}else{
    echo 'No data!!';
    exit;
}



$fruit = $_POST['fruit'];
$intro = $_POST['intro'];

$sql = "INSERT INTO fruit (name, intro)
        VALUES ('$fruit', '$intro')";

if ($conn->query($sql) === TRUE) {
    echo "新增資料完成";
} else {
    echo "新增資料表錯誤: " . $conn->error;
}

$conn->close();

//導去別的頁面
header('location: 28_creat_fruit.php');

?>