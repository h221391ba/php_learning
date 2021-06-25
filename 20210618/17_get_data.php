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
if (isset($_GET['fruit'])){
    $fruit = $_GET['fruit'];
}else{
    echo 'No data!!';
    exit;
}

/**
 * 驗證被攜帶變數是否為空
 * @param $n 需要被驗證的變數
 * @return mixed|string
 * empty() 回傳布林,判斷變數是否為空
 */
function requiredName ($n) {
    return (empty($n)) ? '請輸入水果名稱' : $n;
}

echo requiredName($fruit);
?>