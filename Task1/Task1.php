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
function fibonacciRecursion($number)
{
    if ($number == 0){
        return 0;
    } else if ($number == 1){
        return 1;
    } else {
        return (fibonacciRecursion($number - 1) +
            fibonacciRecursion($number - 2));
    }
}
$number = 10;
for ($counter = 0; $counter < $number; $counter++) {
    echo FibonacciRecursion($counter),' '. PHP_EOL;
}

echo 'Number N to power M'. PHP_EOL;
function numberPower($value, $power)
{
    $result = 1;
    $currentVal = $value;
    $currentPow = $power;
    if ($currentPow < 0) {
        $currentPow = -$currentPow;
    }
    while ($currentPow > 0) {
        if ($currentPow % 2 == 1) {
            $result *= $currentVal;
        }
        $currentVal *= $currentVal;
        $currentPow /= 2;
    }
    if ($power >= 0) {
        return $result;
    } else if ($power < 0) {
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

function ipFilter($ip, $lowIp, $highIp)
{
    $lowIp = ip2long($lowIp);
    $highIp = ip2long($highIp);
    $ip = ip2long($ip);
    if ($ip <= $highIp && $lowIp <= $ip) {
        return "IP in range";
    } else {
        return "IP out of range";
    }
}
$lowIp='1.127.255.100';
$highIp='128.0.0.0';
$ip='2.1.0.0';
echo ipFilter($ip, $lowIp, $highIp). PHP_EOL;
