<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>
<body>

<div class="container">
<!--    menu-->
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Gallery</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.php?page=registration">Registration</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.php?page=login">Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Upload</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

<!--    content-->
    <div class="row justify-content-center">
        <?php
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'registration':
                        require_once './pages/registration.php';
                        break;
                    case 'login':
                        require_once './pages/login.php';
                        break;
                }

            }
        ?>
    </div>

</div>


<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>


