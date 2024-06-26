<?php
require_once '../services/authService.php';

if (session_status() !== PHP_SESSION_ACTIVE)
    session_start();
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Gallery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/registration">Registration</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/login">Login</a>
                </li>
                <?php if (checkAuth()): ?>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/upload">Upload</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/logout">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
