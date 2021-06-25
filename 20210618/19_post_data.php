<?php


//empty() 回傳布林
//驗證帶入的變數是否為空
//if (empty($fruit)){
//    echo '請輸入水果名稱';
//}else{
//    echo $fruit;
//}

/**
 * 確認網址有帶變數
 * exit 中斷程式
 */
if (isset($_POST['fruit'])){
    $fruit = $_POST['fruit'];
}else{
    echo 'No data!!';
    exit;
}

$phones = $_POST['phones'];

/**
 * 驗證被攜帶變數是否為空
 * @param $n 需要被驗證的變數
 * @param $str 警告字串
 * @return mixed|string
 * empty() 回傳布林,判斷變數是否為空
 */
function requiredSingleData ($n, $str) {
    echo (empty($n)) ? "請輸入 $str" . '<br>' : $n . '<br>';
}


/**
 * 將輸入的資料列出且避免空值最後輸入到資料庫
 * 利用continue 跳過
 * @param $arr 陣列資料
 */
function listMultipleData ($arr) {
    foreach ($arr as $value){
        if($value == ''){
            continue;
        }
        echo $value . '<br>';
    }
}



requiredSingleData($fruit, '水果');
requiredSingleData($_POST['address'], '地址');
listMultipleData($phones);

//var_dump($phones);
echo $_POST['telecom'];
echo $_POST['gender'];

?>