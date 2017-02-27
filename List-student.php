<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 27/02/17
 * Time: 16:03
 */

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

foreach ($students as $name => $age){
    echo $name . ' à ' . $age;
}

$average = array_sum($students) / count($students);

echo 'La moyenne d\'age est de : ' . $average;