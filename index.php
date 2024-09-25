<?php
/* Наберите в консоле "php index.php число число", где "число" это целое число */

if(in_array($argv[2], array("0"))) {//проверяем, что второе число не ноль
    echo $stder = "Делить на 0 нельзя" . PHP_EOL;
} else {
    $divisible = intval($argv[1]); //преобразуем первое "число" к типу integer
    $divider = intval($argv[2]);    //преобразуем второе "число" к типу integer
    if($divisible === 0 || $divider === 0 ) { //проверяем, что введены были числа
        echo $stder = "Введите пожалуйста, число" . PHP_EOL;
    } else {
        echo $divisible / $divider . PHP_EOL;
    }   
}
    





//echo $divisible . PHP_EOL . $divider . PHP_EOL;