<?php
function consoleLog($n) {
    echo $n . "<br>";
}
consoleLog('------------while-----------');
$a = 0;
while ($a < 10) {
    $a++;
    consoleLog($a);
}

consoleLog('------------do while-----------');
$a =0;
do{
    $a++;
    consoleLog($a);
}while ($a < 10);

consoleLog('------------for-----------');
for($i = 0; $i < 10; $i++){
    consoleLog($i);
}

//可同時多變數
for($i =2, $j = 2; $i <10; $i++,$j++){
    consoleLog('$i * $j =' . $i*$j);
}

consoleLog('-----------陣列------------');
$userArray1 = array('Tom', 'John', 'May', 'Robbert');
$userArray2 = ["Tom", "John", "May", "Robbert", "Sarah", "Clark", "Tony"];
for($i = 0;$i < count($userArray2); $i++){
    if($userArray2[$i] == 'May'){
        consoleLog('Got May!!');
        break;
    }
    consoleLog($userArray2[$i]);
}

consoleLog('----------continue---------');
for ($i = 0;$i <= 10; $i++){
    if ($i == 4) continue;
    if ($i % 2 == 0){
        consoleLog($i);
    }else{
        continue;
    }
}

for ($i = 0;$i < count($userArray2); $i++){
    if ($userArray2[$i] == 'May'){
        consoleLog('Got May!!');
        continue;
    }
    consoleLog($userArray2[$i]);
}
consoleLog('----------goto---------');
for ($i = 0; $i < 5;$i++){
    consoleLog($i);
    if ($i == 3) goto end;
}
consoleLog('show me the money!');
end:{
    consoleLog('ending');
}

consoleLog('------------test-----------');
consoleLog('show me the money1!');
goto point;
consoleLog('show me the money2!');      //中間的會被跳過
point:{
consoleLog('show me the money3!');
}
?>
