<?php

require_once '../tools/dd.php';

$val = 122;

setcookie('id', $val, time() + 3600 * 24, '/', '', false);
setcookie('test', 'Petya', time() + 3600, '/', '', false);

?>

<a href="script2.php">SCRIPT_2</a>





