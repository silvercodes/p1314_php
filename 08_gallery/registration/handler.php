<?php

require_once '../tools/dd.php';
require_once '../services/validationService.php';
require_once '../services/notifyService.php';

$data = $_POST;

if ($errors = registrationValidation($data)) {
    foreach ($errors as $error)
        notify($error, 'warning');

    exit(0);
}







