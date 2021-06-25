<?php

//一次輸入多筆資料

//require_once "../db_connect.php";


$now = date('Y-m-d H:i:s');


$sql = "INSERT INTO users (name, phone, email, account, creat_time)
        VALUES ('Sue', '0955555555', 'sue@test.com', 'sue', '$now');";
$sql.= "INSERT INTO users (name, phone, email, account, creat_time)
        VALUES ('Helen', '0966666666', 'helen@test.com', 'helen', '$now');";


if ($conn->multi_query($sql) === TRUE) {
    echo "新增資料完成";
    //如果成功就抓id
} else {
    echo "新增資料表錯誤: " . $conn->error;
}


?>