<?php

// $data = [
//     'name' => 'Abrar',
//     'skill' => 'C++'
// ];

// // null assingment operator
// // $data['skill'] = isset($data['skill']) ? $data['skill'] : 'No Name';
// $data['skill'] ??= 'No Name';

// var_dump($data);


// function getSum($x, $y)
// {
//     return array_sum(ge)
// }

function getSum(...$numbers)
{
    print_r(array_sum($numbers));
}

getSum(1,2,3,4,5);

$items = [1,2,3,4];
$items2 = [10,10,10];

print_r(array_sum([...$items, ...$items2]));