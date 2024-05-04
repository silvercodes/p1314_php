<?php

function registrationValidation(array $data): array {
    $errors = [];

    if (! $data['email'] || ! $data['password'] || ! $data['c_password'])
        $errors[] = 'All fields are required';

    if ($data['password'] !== $data['c_password'])
        $errors[] = 'Failed confirm password';

    return $errors;
}
