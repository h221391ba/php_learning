<?php
//array_sum() 加總陣列的內容,要是數字
$arr = [1, 2, 3];
echo array_sum($arr) . '<br>';


//array_unique() 重複的值會忽略
$input = [
    'a' => 'John',
    'Sam',
    'b' => 'John',
    'Mary',
    'Sam'
];
$result = array_unique($input);
print_r($result);
echo '<br>';

//array_change_key_case(array, case) 改變陣列內字母大小寫
$arr = [
    'John' => 1,
    1 =>28,
    'Sam' => 4
];
print_r(array_change_key_case($arr, CASE_UPPER));
echo '<br>';


//array_pad(array, length, value) 將陣列加到指定長度
$input = [1, 2, 3];
$result = array_pad($input, 5, 10);
print_r($result);
echo '<br>';

//in_array(needl, array) 陣列搜尋 檢查陣列有無某一筆資料,回傳布林值
$list = ['A', 'B', 'C', 'D', 'E'];
echo var_dump(in_array('E', $list));
echo '<br>';

//array_search(needl, array) 回傳倍搜尋值得索引,如果沒有該值則回傳false
echo array_search('E', $list);
echo '<br>';


//array_key_exists(key, array) 檢查某key有無在陣列中
$student = [
    'John' => ['age' => 18],
    'May' => ['age' => 19]
];
var_dump(array_key_exists('May', $student));
echo '<br>';


//陣列排序
//asort(array) 依照value正排序陣列
$list = [
    'C' => 'dhree',
    'B' => 'ctwo',
    'A' => 'rone'
];
asort($list);
print_r($list);
echo '<br>';

//rasort(array) 依照value倒排序陣列
rsort($list);
print_r($list);




?>
