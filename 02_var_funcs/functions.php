<?php

//function f1(int $a): int|null
//{
//    if ($a > 10)
//        return 10;
//
//    return null;
//}
//
//if (true)
//{
//    function f2(int $a): int|null
//    {
//        if ($a > 10)
//            return 10;
//
//        return null;
//    }
//}
//
//
//$result = f1('45');
//var_dump($result);


//function sum(int ...$numbers): int
//{
//    $res = 0;
//    foreach ($numbers as $n)
//        $res += $n;
//
//    return $res;
//}
//
//$res = sum(3, 4, 5, 6);



// ==== анонимные ф-ции
//$callable = function (string $email): void {
//    echo '<h1>' . $email . '</h1>';
//};
//$callable('vasia@mail.com');


//function render(callable $callback, string $message): void
//{
//    $callback($message);
//}
//
//$greenRender = function($message) {
//    echo "<h2 style='color: green;'>$message</h2>";
//};
//$redRender = function($message) {
//    echo "<h2 style='color: red;'>$message</h2>";
//};
//
//render($greenRender, 'Hello Vasia');
//render(function($m) {
//    var_dump('Hello Petya');
//}, '');


// TASK
// Написать ф-цию суммирования по предикату
//function sum(array $arr, callable $predicate): int
//{
//    $sum = 0;
//
//    foreach($arr as $item)
//        if ($predicate($item))
//            $sum += $item;
//
//    return $sum;
//}
//
//$arr = [4, 6, 8, 1, 2, 2, 3, 9];
//
//$result = sum($arr, function($n) {
//    return $n % 2 === 0;
//});
//
//var_dump($result);




$num = 43;
$func = function() use($num) {
    echo $num;
};


















