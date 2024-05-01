<?php

session_start();

$token = 'aaabbbcccddd111222333';
$_SESSION['token'] = $token;
$_SESSION['num'] = 345;
$_SESSION['arr'] = [
    'name' => 'Vasia',
    'role' => 'admin',
];

?>

<br>
<a href="script2.php">SCRIPT_2</a>



