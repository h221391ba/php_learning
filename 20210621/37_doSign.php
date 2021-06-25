<?php
require_once "../db_connect.php";

$account = $_POST['account'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

if ($password !== $repassword){
    echo '兩次密碼輸入不一致';
    exit();
}


/**
 * 驗鎮帳號是否重複註冊是否已存在
 */
$checkSql = "SELECT * FROM users WHERE account='$account'";
$checkResult = $conn->query($checkSql);

if ($checkResult -> num_rows > 0){
    echo '此帳號已註冊過';
    exit();
}

$password = md5($password);
$now = date('Y-m-d H:i:s');


$sql = "INSERT INTO users (account, password, creat_time)
        VALUES ('$account', '$password', '$now')";

if ($conn->query($sql) === TRUE) {
    echo "新增資料完成";
    echo '<br>';
    $last_id = $conn->insert_id;
    //如果成功就抓id
} else {
    echo "新增資料表錯誤: " . $conn->error;
}

echo "最新一筆為序號" . $last_id . '<br>';

$conn -> close();
?>