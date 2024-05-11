<?php

function signup(string $email, string $password): bool {

    $users = json_decode(file_get_contents(DB_USERS, true), true) ?? [];

    if (in_array($email, array_column($users, 'email')))
        return false;

    $user = [
        'email' => $email,
        'password' => md5($password)
    ];

    $users[] = $user;

    file_put_contents(DB_USERS, json_encode($users));

    return true;
}

function signin(string $email, string $password): ?array {
    $users = json_decode(file_get_contents(DB_USERS, true), true) ?? [];

    if (! in_array($email, array_column($users, 'email')))
        return null;

    $user = $users[array_search($email, array_column($users, 'email'))];

    return $user['password'] === md5($password) ? $user : null;
}

function logout() {
    session_destroy();
}

function checkAuth(): bool {
    return isset($_SESSION['login']) && $_SESSION['login'];
}
