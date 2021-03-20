<?php

function decimalToBinary($decimalNumber)
{
    $binary = "";
    while ($decimalNumber > 0) {
        $binary = ($decimalNumber % 2) . $binary;
        $decimalNumber = (int) ($decimalNumber / 2);
    }
    return $binary;
}
$binary=5;
echo decimalToBinary ($binary);
echo "\n";

function binaryToDecimal($binaryNumber)
{
    $power = 0;
    $decimal = 0;
    foreach (array_reverse(str_split($binaryNumber)) as $bit) {
        if ((int) $bit === 1) {
            $decimal += pow(2, $power);
        }
        $power++;
    }
    return $decimal;
}
$decimal=10000000;
echo binaryToDecimal ($decimal). PHP_EOL;

echo 'Fibonacci numbers'. PHP_EOL;
function fibonacci($position, $a = 0, $b = 1)
{
    $row = [$a, $b];
    for ($i = 2; $i <= $position; $i++) {
        $row[] = $row[$i - 1] + $row[$i - 2];
    }
    return $row;
}
foreach (fibonacci(0) as $value) {
    echo $value . PHP_EOL;
}

echo 'Fibonacci numbers recursion'. PHP_EOL;
function FibonacciRecursion($number){
    if ($number == 0){
        return 0;
    } else if ($number == 1){
        return 1;
    } else {
        return (FibonacciRecursion($number - 1) +
            FibonacciRecursion($number - 2));
    }
}

$number = 10;
for ($counter = 0; $counter < $number; $counter++){
    echo FibonacciRecursion($counter),' '. PHP_EOL;
}

echo 'Number N to power M'. PHP_EOL;
function numberPower($value, $power){
    $result = 1;
    $currentVal = $value;
    $currentPow = $power;
    if($currentPow < 0) {
        $currentPow = -$currentPow;
    }
    while($currentPow > 0){
        if($currentPow % 2 == 1){
            $result *= $currentVal;
        }
        $currentVal *= $currentVal;
        $currentPow /= 2;
    }
    if($power >= 0){
        return $result;
    } else if($power < 0) {
        return 1 / $result;
    }
}
$value=3;
$power=3;
echo numberPower($value, $power). PHP_EOL;

echo 'Number N to power M recursion'. PHP_EOL;
function powerRecursion($value, $power)
{
    if ($power == 1) {
        return $value;
    }
    if ($power == 0) {
        return 1;
    }
    if ($power < 0) {
        return powerRecursion(1 / $value, -$power);
    } else{
        return $value * powerRecursion($value, $power - 1);
    }
}

$value=3;
$power=3;
echo powerRecursion($value, $power). PHP_EOL;

function ipFilter($ip, $lowIp, $highIp) {
    $lowIp = ip2long($lowIp);
    $highIp = ip2long($highIp);
    $ip = ip2long($ip);
    if ($ip <= $highIp && $lowIp <= $ip) {
        return "IP in range";
    }
    else{
        return "IP out of range";
    }
}
$lowIp='1.127.255.100';
$highIp='128.0.0.0';
$ip='2.1.0.0';
echo ipFilter($ip, $lowIp, $highIp). PHP_EOL;

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
echo "the transpose for the matrix is:". '<pre>';
print_r(transposeMatrix($matrix));
echo '</pre>';



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

$arrNumbersDel = [
    [-3.3, -3.3, -99.99, 105],
    [0.1, -99,  44, -22],
    [0, -12344, 3, 1111],
    [6, 77, 77, -99]
];

function deleteStringСolumn($arrNumbersDel){

    $countСol = count($arrNumbersDel);
    $countString = count($arrNumbersDel);

    for ($string=0; $string < $countString; $string++) {
        $positive = 0;
        for ($col=0; $col < $countСol; $col++) {
            if($arrNumbersDel [$string][$col] == 0){
                unset($arrNumbersDel[$string]);
            }
            $positive+= $arrNumbersDel [$string][$col];
        }
        if($positive > 0){
            unset($arrNumbersDel[$string]);
        }

    }
    return $arrNumbersDel;
}
echo '</pre>';
echo "After deleting rows and columns in which the sum is positive and there is at least `0`:". '<pre>';
print_r(deleteStringСolumn($arrNumbersDel )).PHP_EOL;
echo '</pre>';

$arrNumbers = array(
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
function arrayValuesRecursive($arrNumbers)
{
    $lst = array();
    foreach( array_keys($arrNumbers) as $key ){
        $value = $arrNumbers[$key];
        if (is_scalar($value)) {
            $lst[] = $value;
        } elseif (is_array($value)) {
            $lst = array_merge( $lst,
                arrayValuesRecursive($value)
            );
        }
    }
    return $lst;
}
echo '<pre>';
print_r(arrayValuesRecursive($arrNumbers));
echo '</pre>';