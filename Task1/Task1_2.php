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

$array1 = [[2, 2],[4, 8],];
$array2 = [[2, 2, 3],[4, 8, 1, 9],];

function matrixMult($array1, $array2)
{
    $row = count($array1);
    $column = count($array2[0]);
    $p = count($array2);
    if (count($array1[0]) != $p) {throw new Exception('Incompatible matrixes');}
    $arrayNew = [];
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $column; $j++) {
            $arrayNew[$i][$j] = 0;
            for ($k = 0; $k < $p; $k++) {
                $arrayNew[$i][$j] += $array1[$i][$k] * $array2[$k][$j];
            }
        }
    }
    return ($arrayNew);
}

echo '<pre>';
print_r(matrixMult($array1, $array2));
echo '</pre>';



$matrix = array(array(1,2,3),array(4,5,6),array(7,8,9));

function transposeMatrix($matrix)
{
    $m=count($matrix);
    $n=count($matrix[2]);
    $arrayN = [];

    for ($row = 0; $row < $m; $row++) {
        for ($col = 0; $col < $n; $col++)
            echo " " . $matrix[$col][$row];
        echo "<br/>";

    }


}
echo "the transpose for the first matrix is:". '<pre>';
print_r(transposeMatrix($matrix));
echo '</pre>';

$arr_numbers = array(
    '1',
    '2',
    array(
        '2.1',
        '2.2',
        array(
            '2.2.1',
            '2.2.2',
            array(
                '2.2.2.1'
            )
        ),
        '2.3',
        array(
            '2.3.1',
            array(
                '2.3.1.1',
                '2.3.1.2'
            )
        )
    )
);
function array_values_recursive($arr_numbers)
{
    $lst = array();
    foreach( array_keys($arr_numbers) as $key ){
        $value = $arr_numbers[$key];
        if (is_scalar($value)) {
            $lst[] = $value;
        } elseif (is_array($value)) {
            $lst = array_merge( $lst,
                array_values_recursive($value)
            );
        }
    }
    return $lst;
}
echo '<pre>';
print_r(array_values_recursive($arr_numbers));
echo '</pre>';