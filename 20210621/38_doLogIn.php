<?php
require_once "../db_connect.php";

$account = $_POST['account'];
//因為密碼儲存時有透過混碼加密 所以需要混碼才能登入
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE account='$account' AND password='$password'";
$result = $conn->query($sql);

if ($result -> num_rows == 1){
    echo '登入成功';
}else{
    echo '登入失敗';
}

?>
