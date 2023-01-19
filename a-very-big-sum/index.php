<?php

/*
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER_ARRAY ar as parameter.
 */

function aVeryBigSum($ar)
{
    // Write your code here
    $sum = 0;

    for ($i = 0; $i < count($ar); $i++) {

        $sum += $ar[$i];
    }

    return $sum;
}
