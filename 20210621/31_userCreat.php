<?php
require_once "../db_connect.php";

if (isset($_POST['account'])) {
    $account = $_POST['account'];
} else {
    echo 'No data!!';
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
//訂單 發表文章留言需要時間
$now = date('Y-m-d H:i:s');



/**
 * 多筆電話輸入
 * 此為其中一種方式
 * 但是建在同一個資料表比較不好
 * 一對多通常會有另一個表格儲存
 */
//如果使用者有空白梅輸入則會將空白寫入資料庫(不太好
//所以用以下方式過濾

//array_filter() 空值 空字串 0 皆會過濾掉
$phone = array_filter($phone);
var_dump($phone);
echo '<br>';
//implode() 將陣列變成字串以逗號分開
$phoneStr = implode(',', $phone);
//echo $phoneStr;

//$phoneArr = [];
//foreach ($phone as $value){
//    if ($value !== '' || $value != null){
//        array_push($phoneArr, $value);
//    }
//}
//
//var_dump($phoneArr);


//exit();

$sql = "INSERT INTO users (name, phone, email, account, creat_time)
        VALUES ('$name', '$phoneStr', '$email', '$account', '$now')";

if ($conn->query($sql) === TRUE) {
    echo "新增資料完成";
    echo '<br>';
    $last_id = $conn->insert_id;
    //如果成功就抓id
} else {
    echo "新增資料表錯誤: " . $conn->error;
}

echo "最新一筆為序號" . $last_id . '<br>';


/**
 * 新增多筆資料通常用法
 * 令開新的資料表以id互相連結建立關聯
 * 利用迴圈輸入多筆資料
 */
foreach ($phone as $value) {
    $sqlPhone = "INSERT INTO phone (phone, user_id)
                VALUES ('$value', '$last_id')";

    if ($conn->query($sqlPhone) === TRUE) {
        echo "新增 $value 完成";
        echo '<br>';
    } else {
        echo "新增電話錯誤: " . $conn->error;
    }
}


$conn->close();

header('location: 33_user_list.php');

?>