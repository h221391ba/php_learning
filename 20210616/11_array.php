<?php
function consoleLog($n) {
    echo $n . "<br>";
}

consoleLog('-------------------------陣列宣告-----------------------');
$arr[0] = 3;
$arr[1] = 2;
$arr[2] = 1;
consoleLog(var_dump($arr));

$arr2 = array(3, 2, 1);
consoleLog(var_dump($arr2));

$arr3 = [3, 2, 1];
consoleLog(var_dump($arr3));

consoleLog('-------------------------多維陣列-----------------------');
//陣列中有多個陣列
$arr4[0][0] = '00';
$arr4[0][1] = '01';
$arr4[1][0] = '10';
$arr4[1][1] = '11';
consoleLog(print_r($arr4));

$arr5 = array(
    array('00', '01'),
    array('10', '11')
);
consoleLog(print_r($arr5));

$arr6 = [
    ['00', '01'],
    ['10','11']
];
consoleLog(print_r($arr6));

//陣列嵌入
$name = array('A', 'B', 'C');
$height = array(180, 173, 165);
$weight = array(83, 75, 50);
$studentData = array($name, $height, $weight);
consoleLog(print_r($studentData));

//關聯式陣列
$student['name'] = 'Tom';
$student['height'] = 180;
$student['weight'] = 75;
consoleLog(print_r($student));
consoleLog("This student is ".$student["name"].", his height is: ".$student["height"]."cm, weight is "
    .$student["weight"]."kg");
?>
<div>
    This student is <?=$student["name"]?>, his height is: <?=$student["height"]?>cm, weight is <?=$student["weight"]?>kg.
</div>
<?php
$b[1] = 9521;
$b['name'] = 'Tom';
var_dump($b);
$a[1] = 'John';
$a['1'] = 'Sam';
var_dump($a);
?>
