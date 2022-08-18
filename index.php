<?php 

// variables
$num1 = 2;
$num2 = 6;

// conditions
if ($num1 % 2 == 0){
    echo 'Número é par ';
}
else{
    echo 'Núemro é ímpar';
}

// loops
echo '<br> while...do <br>';
$i = 0;
while ($i<10){
    echo $i;
    $i++;
}

echo '<br> do...while<br>';
$i = 0;
do{
    echo $i;
    $i++;
} while ($i < 10);
