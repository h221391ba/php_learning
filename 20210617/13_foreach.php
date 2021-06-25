<?php
function consoleLog ($n) {
    echo $n . "<br>";
}

//類似js的foreach
$arr = [1, 2, 3, 4];
foreach ($arr as $value){
    consoleLog($value);
}

//沒有指定key
$arr2 = ['BMW', 'Toyota', 'Tesla'];
foreach ($arr2 as $car => $name){
    consoleLog("Index: $car is $name");
}

//有指定key
$users = array(
    'John' => 'sales',
    'Sam' => 'manager',
    'Mary' => 'secretary'
);

foreach ($users as $user => $job){
    consoleLog($user . 'is a ' . $job . '.');
}


//多維陣列
$cars = array(
    'Tesla' => array(
        'type' => 'Model S',
        'price' => 335
    ),
    'Toyota' => array(
        'type' => 'Altis',
        'price' => 70
    )
);


foreach ($cars as $name => $value){
    consoleLog('The price of ' . $name . ' ' . $value['type'] . ' is ' . $value['price']);
}
?>
