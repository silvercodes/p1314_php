<?php

// TYPES
// ========
// bool
// int
// float
// string
// ----------
// array
// object
// callable
// mixed
// resource
// null

//$a = 45;
//$b = 0b01001;
//$c = 0xFF;
//
//$d = 'vasia';
//$d = 45;
//
//$e = null;


//$a = null;
//$b = NULL;


//$a = 45;
//$b = $a;
//$c = &$a;



// OPERATIONS
//  + - / * %    **
// ++ --
// .                    // конкотенация строк
//$domain = 'mail.com';
//$email = 'vasia' . '@' . $domain;
//// == === != !== < > >= <= <=>
//echo 5 === 5; // true
//echo '<br>';
//echo 5 == '5'; // true
//echo '<br>';
//echo 5 === '5'; // false
//echo '<br>';
//echo '5' != 5; // false
//echo '<br>';
//echo '5' !== 5; // true
//echo '<br>';
//echo 5 <=> 5; // 0
//echo '<br>';
//echo 2 <=> 5; // -1
//echo '<br>';
//echo 12 <=> 3; // 1
//echo '<br>';
//echo 'vasia' <=> 5;
//
//// && and       || or       !       xor
//// &    |   ^   ~   <<      >>
//// =    += -= *= /= %= .= **= &= |=^= ~= <<= >>=
///
///


//$a = 5;
//if ($a < 0)
//    echo '<0';
//elseif ($a > 0 && $a < 10)
//    echo 'range';
//else
//    echo 'else';

// if (0)           // false
// if (10)          // true
// if ('')          // false
// if (' ')         // true
// if ('@')         // true
// if ([])          // false
// if ([1, 2, 3])   // true
// if (null)        // false

//$age = 23;
//switch($age)
//{
//    case 1:
//        //
//        break;
//    default:
//        //
//}
//
//switch($age):
//    case 1:
//        break;
//        //
//endswitch;


//$val = 12;
//$result = match($val)
//{
//    1 => 'Vasia',
//    2 => 'Petya',
//    default => 'no_name',
//};


// ЦИКЛЫ for foreach do/while (break/continue)
//for ($i = 0; $i < 10; ++$i)
//    echo "$i<br>";




//echo '<table style="border: 1px solid black; border-collapse: collapse"><tbody>';
//for ($i = 0; $i < 10; ++$i)
//{
//    echo '<tr>';
//        for ($j = 0; $j < 10; ++$j)
//        {
//            echo '<td style="border: 1px solid black; border-collapse: collapse">' . $i * $j .'</td>';
//        }
//    echo '</tr>';
//}
//echo '</tbody></table>';



// ARRAYS

//$arr1 = [3, 4, 6, 7, 8];
//$arr2 = [0 => 1, 45 => 112];
//$arr3 = array(2, 3, 4, 5);
//echo gettype($arr3);
//
//$arr4 = [];
//$arr5 = array();
//
//echo $arr1[3];
//$result = $arr1[50];
//echo $result;
//
//$arr5 = null;
//$arr5 = $arr1;


// ---- if exists
//if(array_key_exists(5, $arr1))
//{}
//if (in_array(3, $arr1))
//{}


// -----adding
// $arr = [3, 4, 6, 7, 8];
//$arr[5] = 101;
//$arr[0] = 34;
//$arr[] = 102;


// ------ delete
//unset($arr[0]);
//unset($arr);
//
//if (isset($arr))
//    echo $arr[0];

// $arr1 = [null, 34, 'vasia@mail.com', 3.8, true];




// == debug
function show($val) {
    echo '<pre>';
    print_r($val);
    echo '</pre>';
}
//
//$arr1 = [3, 4, 6, 7, 8];
//show($arr1);
//
//var_dump($arr1);




// == assoc arrays

//$languages = [
//    'en' => 'English',
//    'fr' => 'French',
//    'es' => 'Spanish',
//];

// echo $languages['en'];
// '7'          --> 7
// '07'         --> '07'
// 7.5          --> 7
// true         --> 1
// false        --> 0
// null         --> ''


//$arr = [
//    '95' => 'a',
//    '095' => 'b',
//    9.5 => 'c',
//    true => 'd',
//    null => 'e'
//];
//
//echo $arr[95] . '<br>';    // a
//echo $arr['095'] . '<br>';    // b
//echo $arr[9] . '<br>';    // c
//echo $arr[1] . '<br>';    // d
//echo $arr[''] . '<br>';    // e


//$test = [
//    9.1 => 'a',
//    9 => 'b',
//    95 => 'c',
//    '95' => 'd'
//];
//
//show($test);


//$languages = [
//    'en' => 'English',
//    'fr' => 'French',
//    'es' => 'Spanish',
//];

//foreach($languages as $key => $val) {
//    echo 'KEY: ' . $key . ' VAL: ' . $val . '<br>';
//}



// === serialization
//$languages = [
//    'en' => 'English',
//    'fr' => 'French',
//    'es' => 'Spanish',
//];
//
//$str = serialize($languages);
//echo $str . '<br>';
//$json = json_encode($languages);
//echo $json;
//
//var_dump(unserialize($str));
//var_dump(json_decode($json, true));




$user = [
    'id' => 101,
    'email' => 'vasia@mail.com',
    'roles' => [
        'admin',
        'author',
    ],
];

foreach ($user['roles'] as $role)
    echo $role . '<br>';


















