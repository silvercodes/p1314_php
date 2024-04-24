<?php

function dump($val, $title = 'extra'): void {
    echo "<h3>$title</h3>";
    echo '<h4><pre>';
    print_r($val);
    echo '</pre></h4>';
    echo '---------------';
}

$nums = [3, 4, '5', 6];
$p = ["Mercury", "Venus", "Earth", "Mars"];
$u = [
    21 => 'Vasia',
    45 => 'Petya',
    61 => 'Dima',
];

// count
dump(count($nums), 'count'); // 4

// in_array
dump(in_array(5, $nums, true), 'in_array');

// array_sum / array_product

// range
dump(range(1, 10), 'range');
dump(range('a', 'z'), 'range');

// array_merge / array_merge_recursive
dump(array_merge($nums, $p), 'array_merge');
$a = ['one' => 'a', 'b', 'c', 'd'];
$b = ['one' => 1, 2, 3, 4];
// dump(array_merge_recursive($a, $b), 'array_merge_recursive');
dump(array_merge($a, $b), 'array_merge');

//$default = [
//    'role' => 'admin',
//    'timeout' => 100,
//    'port' => 80,
//    'permissions' => [
//        'read',
//        'write',
//    ],
//];
//
//$config = [
//    'port' => 8080,
//];
//
//$result = array_merge($default, $config);
//var_dump($result);


// array_slice / array_splice
//dump(array_slice($p, 1, 2, true), 'array_slice');
//dump(array_slice($p, -2, 1, true), 'array_slice');
//
//// dump(array_splice($p, 2), 'array_splice');
////dump(array_splice($p, 1, -1), 'array_splice');
//// dump(array_splice($p, 1, count($p), 'hoho'), 'array_splice');
//array_splice($p, 3, 0, 'asteroid');
//var_dump($p);



// array_combine
// dump(array_combine($nums, $p), 'array_combine');

// array_flip
// dump(array_flip($u), 'array_flip');

// array_reverse

// array_search
// dump(array_search('Mars', $p, true));


// array_replace
// dump(array_replace($p, ['Vasia', 2 => 'Petya']));

// array_unique

// array_shift / array_unshift / array_pop / array_push

// array_pad
// dump(array_pad($nums, 30, ['+', '*']));

// array_chunk
// dump(array_chunk($p, 3));

// array_map
$result = array_map(function ($item){
    return lcfirst($item);
}, $p);

dump($result);

