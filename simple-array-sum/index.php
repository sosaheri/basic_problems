<?php

function simpleArraySum($ar) {
// Write your code here

$sum = 0;

foreach( $ar as $value){
$sum += $value;
}
return $sum;

}