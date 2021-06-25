<?php
function consoleLog ($n) {
    echo $n . "<br>";
}

// is_array() 判斷是否為陣列 返回布林值
$arr = array('John', 28, 'sales');
consoleLog((is_array($arr)) ? 'true' : 'false');


// list() 中的變數以array的相對位置賦值
list($name, $age, $job) = $arr;
consoleLog("$name is $age years old and he is a $job");


// range(low,high,step) 创建一个包含指定范围的元素的数组。 (陣列最低值, 陣列最高值, 遞增數字(預設 1 ))
$r = range(2, 12, 2);
consoleLog(print_r($r));
foreach ($r as $value){
    consoleLog($value);
}

// array_count_values() 計算陣列中值重複的次數,回傳值為陣列
$users = ['john', 'john', 'sam', 'sarah'];
consoleLog(print_r(array_count_values($users)));


//陣列合併
$arr1 = array('name' => 'John' , 2, 3);
$arr2 = array('a', 'b', 'name' => 'Sam','age' => 18, 4 );

//array_merge() 將重複的覆蓋 後者會覆蓋前者
$result1 = array_merge($arr1, $arr2);
consoleLog(print_r($result1));

//array_merge_recursive() 不會覆蓋 但是重複的會變成陣列
$result2 = array_merge_recursive($arr1, $arr2);
consoleLog(print_r($result2));


//compact('var1', 'var2', 'var3' ...) 合併變數為一個陣列,變數名稱為key
$var1 = 'a';
$var2 = 'b';
$var3 = 'c';
$myArray = compact('var1', 'var2', 'var3');
consoleLog(print_r($myArray));

//裡面也可以是多個陣列
$user = ['a', 'b', 'c'];
$meta = array(
    'author' => 'tom',
    'description' => 'this is description'
);
$data = compact('user', 'meta');
consoleLog(print_r($data));
consoleLog(print_r($data['user']));

//array_chunk(array, size, preserve_keys)
// preserve_key	:true - 保留原始数组中的键名。/false - 默认。每个新数组块使用从零开始的索引。
// 將一個數組分割成多個數組，其中每個數組的單元數目由 size 決定。最後一個數組的單元數目可能會少幾個。
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_chunk($arr, 3);
consoleLog(print_r($result));

//array_combine(keys,values) 將一陣列為key，另一陣列為value，合並成一組陣列
$a = ['John', 'Sam'];
$b = [28, 32];
$c = array_combine($a, $b);
consoleLog(print_r($c));

// 陣列修改
//array_shift(array_name) 去掉陣列第一個元素
$arr = ['a', 'b', 'c'];
array_shift($arr);
consoleLog(print_r($arr));

//array_unshift(array_name, value) 將元素插入陣列開頭
array_unshift($arr, 'A');
consoleLog(print_r($arr));

//array_pop(array_name) 移除陣列最後一個元素
$arr2 = ['a', 'b', 'c'];
array_pop($arr2);
consoleLog(print_r($arr2));

//array_push(array_name, values) 從陣列最後面加入指定值
array_push($arr2, 'A', 'B');
consoleLog(print_r($arr2));

//array_slice(array,start,length,preserve) 在陣列中根据条件取出一段值，并返回
$input = ['a','b','c','d','e'];
$output = array_slice($input, 0, 4);
consoleLog(print_r($output));

//array_splice(array,start,length,replacement) 从陣列中移除元素，并用新元素取代它：
//start 规定删除元素的开始位置
//length 為要去除的元素的數量。
//可以設定一組元素來替換被移除的元素。
array_splice($input, 1, 3, "ghgh");
consoleLog(print_r($input));        //'b','c','d'被移除替換成 "ghgh"

//array_rand(array,number) 随机选出一个或多个键名，并返回。
$result = array_rand($input, 2);
consoleLog(print_r($result));

$test =[
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4
];
$result = array_rand($test,2);
consoleLog(print_r($result));


?>
