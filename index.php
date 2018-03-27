<?php 
$N = 2;
echo 'Исходные данные N: '.$N.';';

$answer = [];
while ($N > 1){
    $divider = numberOfDividers($N);
    $answer[] = $divider;
    $N = $N / $divider;
}

echo '<br>Ответ: '.json_encode($answer);

// минимальный простой делитель числа 
function numberOfDividers ($number){
    $min = $number;
    for ($i = 2; $i < $number; $i++){
        if ($number % $i == 0){
            if ($min > $i){
                $min = $i;
                break;
            }
        }
    }
    return $min;
}

?>