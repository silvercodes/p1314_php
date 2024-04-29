<?php
    require_once '../tools/dd.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        if (! (isset($_POST['frm_key']) && $_POST['frm_key'] === 'frm_main')) {
    ?>

    <a href="https://google.com">LINK</a>

    <form action="index_2.php" method="post">

        <input type="hidden" name="frm_key" value="frm_main">

        <p>Enter your name: <input type="text" name="name"></p>
        <p>Enter your email: <input type="email" name="email"></p>
        <p>Enter your password: <input type="password" name="password"></p>

        <p>Group: <input type="text" name="group[groupA]"></p>
        <p>Group: <input type="text" name="group[groupB]"></p>
        <p>Group: <input type="text" name="group[groupC]"></p>

        <select name="select1">
            <option value="cpp">C++ Language</option>
            <option value="cs">C# Language</option>
            <option value="php">PHP 8.2</option>
        </select>

        <select name="select2[]" size="6" multiple>
            <option value="cpp">C++ Language</option>
            <option value="cs">C# Language</option>
            <option value="php">PHP 8.2</option>
            <option value="cpp2">C++ Language</option>
            <option value="cs2">C# Language</option>
            <option value="php2">PHP 8.2</option>
        </select>

        <input type="radio" name="radio" value="r1"/>
        <input type="radio" name="radio" value="r2"/>
        <input type="radio" name="radio" value="r3"/>
        <input type="radio" name="radio" value="r4"/>

        <input type="checkbox" name="check[one]" value="check_on"/>
        <input type="checkbox" name="check[two]" value="check_on"/>
        <input type="checkbox" name="check[three]" value="check_on"/>

        <button type="submit" name="btn_submit" value="btn1">SUBMIT1</button>
        <button type="submit" name="btn_submit" value="btn2">SUBMIT2</button>
    </form>

<?php
        } else {
            dd($_POST);
        }
?>

</body>
</html>
