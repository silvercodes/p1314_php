<?php

function dump($val, $title = 'extra'): void {
    echo "<h3>$title</h3>";
    echo '<h4><pre>';
    var_dump($val);
    echo '</pre></h4>';
    echo '---------------';
}


// strtoupper / strtolower / ucfirst / lcfirst
dump(strtolower('Vasia@mail.com'));

// strlen

// substr / mb_substr
dump(substr('vasia@mail.com', 3, 5));
dump(substr('vasia@mail.com', -4));

// str_replace
dump(str_replace('@', '***', 'vasia@mail.com'));
dump(str_replace(['v', '@', '.'],  ['X', '***', ',,,'], 'vasia@mail.com'));

// strtr
dump(strtr('Vasia', ['V' => '*', 'a' => '-']));
dump(strtr('Vasia', 'Va', '*-'));

// substr_replace
dump(substr_replace('vasia', '*****', 1, 2));

// strpos / strrpos
dump(strpos('vasia@mail.com', 'a', 5));
dump(strpos('http://google.com', 'http://'));

// strstr / strchr
dump(strstr('http://google.com', 'g'));
dump(strstr('myapp.com/img/1.jpg', '/'));

// str_split
dump(str_split('http://google.com',4));
dump(array_sum(str_split(12345, 1)));

// explode / implode
dump(explode(':', 'http://google.com'));
$date = '2024-04-27';
dump(implode('.', explode('-', $date)));

// trim / ltrim / rtrim
dump(trim('      vasia'));
dump(trim('   /path.php .@', '/ .@'));
dump(trim('../../../../axios.js', ' ./'));
dump(trim('abcdef', 'a..d'));

// str_shuffle



