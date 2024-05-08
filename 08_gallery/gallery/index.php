<!doctype html>
<html lang="en">
<?php require_once '../components/head.php'; ?>
<body>

    <div class="container">

        <div class="row">
            <?php require_once '../components/menu.php'; ?>
        </div>

        <div class="row">
            <h1 class="display-6">Gallery</h1>
        </div>

        <div class="row mt-4 justify-content-center">
            <div class="col-10">
                <?php
                    require_once '../tools/dd.php';
                    require_once '../config.php';

                    session_start();

                    $albumDir = $_SESSION['dir'];
                    $path = STORAGE . '/' . $albumDir;

                    $files = array_diff(scandir($path), ['.', '..']);

                    foreach ($files as $file):
                        $link = '/storage/' . $albumDir . '/' . $file;
                ?>
                        <a href="<?= $link ?>" target="_blank">
                            <img class="photo img-thumbnail" src="<?= $link ?>" alt="<?= $file ?>">
                        </a>
                <?php
                    endforeach;
                ?>
            </div>
        </div>

    </div>
<?php require_once '../components/scripts.php'; ?>
</body>
</html>
