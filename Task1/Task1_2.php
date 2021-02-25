<?php

$array = [0, -78, -1, 99, 0, 77, -33, 1, 3, 199, -200, 23, 25, - 1999, 0];

function percent($array)
{
    $zero = '0';
    $positive = '0';
    $negative = '0';
    $total = count($array);
    foreach ($array as $num){
        if ($num > '0'){
            $positive++;
        } else if ($num < '0'){
            $negative++;
        } else {
            $zero++;
        }
    }
    echo "Percent from array:".PHP_EOL;
    echo "Positive: ".$positive/$total*'100'.PHP_EOL;
    echo "Negative: ".$negative/$total*'100'. PHP_EOL;
    echo "Zero: ".$zero/$total*'100'.PHP_EOL;
}
echo  percent($array);


function sortOrderDesc($array)
{
    $count = count($array);
    for($i = 0; $i < $count; $i ++) {
        for($j = 0; $j < $count; $j ++) {
            if ($array[$i] > $array[$j]) {
                $item = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $item;
            }
        }

    }
    return $array;
}
echo 'SortOrder DESK:' . implode(',',sortOrderDesc($array)). PHP_EOL;

function sortOrderAsc($array)
{
    $count = count($array);
    for($i = 0; $i < $count; $i ++) {
        for($j = 0; $j < $count; $j ++) {
            if ($array[$i] < $array[$j]) {
                $item = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $item;
            }
        }

    }
    return $array;
}

echo 'SortOrder ASK: ' . implode(',', sortOrderAsc($array)) .PHP_EOL;