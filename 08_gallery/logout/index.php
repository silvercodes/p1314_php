<?php

require_once '../services/authService.php';

session_start();

logout();

header('Location: /login');
