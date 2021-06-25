<?php
require_once "../db_connect.php";

$id = $_POST['id'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$email = $_POST['email'];


$sql = "UPDATE users SET 
        phone='$phone',
        name = '$name',
        email = '$email'
        WHERE id ='$id' ";


if ($conn->query($sql) === TRUE) {
    echo "更新成功";
} else {
    echo "更新資料錯誤: " . $conn->error;
}


header('location: 33_user_list.php');
//header('location: user.php?id='.$id);

?>