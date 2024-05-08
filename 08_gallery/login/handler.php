<?php

require_once '../config.php';
require_once '../tools/dd.php';
require_once '../services/validationService.php';
require_once '../services/notifyService.php';
require_once '../services/authService.php';


$data = $_POST;

if ($errors = loginValidation($data)) {
    foreach ($errors as $error) {
        notify($error, 'warning');
    }

    exit(0);
}

$user = signin($data['email'], $data['password']);

if (! $user)
    notify('<div>Email or password is invalid</div><a href="/registration">REGISTRATION</a>', 'warning');
else {
    session_start();

    $_SESSION['login'] = true;
    $_SESSION['user'] = $user;
    $_SESSION['dir'] = md5($user['email']);

    header('Location: /gallery');
}
