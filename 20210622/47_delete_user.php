<?php
require_once "../db_connect.php";


$id = $_GET['id'];

/**
 * 直接刪除資料太危險有可能被有心人士利用
 * 多採用增加valid方法
 * =1代表可以被使用的帳戶
 * =0則是停止使用的帳戶
 */
//$sql = "DELETE FROM users WHERE id='$id'";
//if ($conn->query($sql) === TRUE) {
//    echo "刪除成功";
//} else {
//    echo "刪除資料錯誤: " . $conn->error;
//}

$sql = "UPDATE users SET valid = 0 WHERE id = '$id'";


if ($conn->query($sql) === TRUE) {
    echo "刪除成功";
} else {
    echo "更新資料錯誤: " . $conn->error;
}
header('location: 46_user_list.php');

?>