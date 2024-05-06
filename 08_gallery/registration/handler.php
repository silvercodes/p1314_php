<?php

require_once '../config.php';
require_once '../tools/dd.php';
require_once '../services/validationService.php';
require_once '../services/notifyService.php';
require_once '../services/authService.php';

$data = $_POST;

if ($errors = registrationValidation($data)) {
    foreach ($errors as $error) {
        notify($error, 'warning');
    }

    exit(0);
}

if (! signup($data['email'], $data['password']))
{
    notify('You are already signed up', 'warning');
    exit(0);
}

header('Location: /login');
