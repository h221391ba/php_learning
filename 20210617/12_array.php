<?php
function consoleLog($n) {
    echo $n . "<br>";
}

$a = array(
    0 => 'A',
    1 => 'B',
    2 => 'C'
);
consoleLog(var_dump($a));

$cars['Tesla'] = array('Model S', 335);
$cars['Tesla'] = array('Model 3', 210);
$cars['Toyota'] = array('Altis', 70);
consoleLog(var_dump($cars));

$cars = array(
    'Tesla' => array('Model S', 335),
    'Toyota' => array('Altis', 70)
);
consoleLog(var_dump($cars));
consoleLog('Tesla' . $cars['Tesla'][0] . "'s price is:" . $cars['Tesla'][1]);

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
consoleLog(var_dump($cars));
consoleLog('Tesla' . $cars['Tesla']['type'] . "'s price is:" . $cars['Tesla']['price']);


consoleLog('------------------陣列值型別--------------------');
$a = array('0', '1', '2');
$b = array(0, 1, 2);

consoleLog(var_dump($a == $b));     //true, 值一樣
consoleLog(var_dump($a === $b));    //false,型別不一樣


consoleLog('-------------------陣列合併------------------');
$c = array(
    'John' => array('John', 1),
    'Sam' => array('Sam', 2)
);

$d = array(
    'John' => array('John', 3),
    'Mary' => array('Mary', 4)
);

$e = $c + $d;
consoleLog(var_dump($e));
consoleLog(print_r($e));        //Array ( [John] => Array ( [0] => John [1] => 1 ) [Sam] => Array ( [0] => Sam [1] => 2 ) [Mary] => Array ( [0] => Mary [1] => 4 ) )

?>
<script>
    //js分成物件與陣列
    let obj = {
        0: 'A'
    };
    let arr = [];
</script>
