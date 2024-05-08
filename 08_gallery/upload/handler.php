<?php

require_once '../tools/dd.php';
require_once '../config.php';
require_once '../services/notifyService.php';

session_start();    // TODO: check session status

$files = $_FILES['usr_img'];

$movedFiles = [];

try {
    for ($i = 0; $i < count($files['name']); ++$i) {
        $nameInfo = pathinfo($files['name'][$i]);

        $filename = bin2hex(random_bytes(FILENAME_LENGTH));
        $ext = $nameInfo['extension'];
        $destPath = STORAGE . '/' . $_SESSION['dir'] . '/' . $filename . '.' . $ext;

        if (is_uploaded_file($files['tmp_name'][$i])) {
            if (! move_uploaded_file($files['tmp_name'][$i], $destPath))
                throw new Exception();
            else
                $movedFiles[] = $destPath;
        }
    }
} catch(Exception $ex) {
    foreach ($movedFiles as $mf)
        unlink($mf);

    notify('File uploading error', 'warning');
}
