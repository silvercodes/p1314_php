<?php

$cookie_key = 'count';

if (! isset($_COOKIE[$cookie_key]))
    setcookie($cookie_key, 1, time() + 3600);
else {
    $count = $_COOKIE[$cookie_key];
    ++$count;

    var_dump($count);

    setcookie($cookie_key, $count, time() + 3600);
}
?>

<br>
<a href="index.php">RELOAD</a>
