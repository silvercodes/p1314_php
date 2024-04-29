<?php

require_once '../tools/dd.php';

if (isset($_COOKIE['id'])) {
    $val = $_COOKIE['id'];
    dump($val);
} else {
    echo 'no cookie';
}

?>

<a href="script1.php">SCRIPT_1</a>
