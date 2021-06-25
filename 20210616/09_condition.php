<?php
function consoleLog($n) {
    echo $n . "<br>";
}
$JohnScore = 50;
$SamScore = 80;
if($JohnScore > $SamScore){
    consoleLog('John is better');
}elseif ($JohnScore == $SamScore){
    consoleLog('John and Sam are equal');
}else{
    consoleLog('Sam is better');
}

if($JohnScore > $SamScore):
    consoleLog('John is better');
elseif ($JohnScore == $SamScore):
    consoleLog('John and Sam are equal');
else:
    consoleLog('Sam is better');
endif;

$id = 1;
switch ($id){
    case 0:
        consoleLog('id 0 is apple');
        break;
    case 1:
        consoleLog('id 1 is orange');
        break;
}

?>
